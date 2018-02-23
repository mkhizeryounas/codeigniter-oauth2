<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
// http://localhost:8888/oauth-server/oauth/authorize?response_type=code&state=abc123&client_id=shopdeskClientId&redirect_uri=http%3A%2F%2Flocalhost%3A8888%2Foauth-server%2Fexample%2Fredirect.php&scope=products_read,products_write
class Oauth extends REST_Controller {
    public function __construct () {
        parent::__construct();
        $this->load->model('Oauth_model');
    }
	public function index_get() {
		$this->set_response(array(
			'status' => true,
			'message' => 'oAuth controller'
		));
    }
    public function authorize_get() {
        $response_type = strtolower($this->get('response_type'));
        switch($response_type) {
            case "code" : {
                try {
                    $client_id = $this->get('client_id');
                    $redirect_uri = urldecode($this->get('redirect_uri'));
                    $scope = explode(",", $this->get('scope'));
                    $state = ($this->get('state')?$this->get('state'):"");
                    if(is_array($scope)) {
                        $scope = array_values(array_diff($scope, array("")));
                    }
                    if(count($client_id)<=0) {
                        throw new Exception("client_id");                        
                    }
                    if(count($redirect_uri)<=0) {
                        throw new Exception("redirect_uri");                        
                    }
                    if(count($scope)<=0) {
                        $scope = ['read'];
                    }
                    $user = get_cookie();
                    if($user) {
                        
                        $data['title'] = "Authorize Application";
                        try {
                            $userData = $this->Oauth_model->getUser($user['user_id']);
                            if(!$userData) 
                                throw new Exception("invalid user");
                            $appData = $this->Oauth_model->getApp($client_id);
                            if(!$appData)
                                throw new Exception('invalid client_id');
                            
                            unset($userData['user_password']);
                            
                            $data['info'] = [
                                "status" => true,
                                "client_id"=>$client_id,
                                "redirect_uri"=>$redirect_uri,
                                "scope"=>$scope,
                                "state" => $state,
                                "user" => $userData,
                                "app" => $appData
                            ];
                            $this->set_response($data['info']);

                            

                            // $this->load->view('auth/oauth/oauth-authorize-app', $data);
                        }
                        catch (Exception $e) {
                            $data['error'] = $e->getMessage();
                             $this->load->view('auth/oauth/oauth-authorize-error', $data);
                        }
                    }
                    else {
                        redirect("oauth/signin?redirect=".urlencode(fullpath()));
                    }
                                        
                }
                catch(Exception $e) {
                    $this->set_response([
                        "status" => false,
                        "message" => $e->getMessage()." param is missing"
                    ]);
                }
            }
            break;
            default: {
                $this->set_response([
                    "status" => false,
                    "message" => "requsted response_type is not supported"
                ]);
            }
            break;
        }
    }

    private function genTokens($app_id, $user_id, $scope, $code=null) {
        $scope = implode(',', $scope);
        
    }

    public function status_get()	{
		$res = get_cookie();
		if($res) {
			$this->set_response([
				"status" => true,
				"message"=> "RESTful API is working fine",
				"user" => $res
			]);
		}
		else {
			redirect('oauth/signin');
		}
	}
	public function logout_get() {
		delete_cookie();
		redirect('/');
	}
	public function signin_post() {
		$this->load->model('auth_model');
		$data['title'] = 'Sign in';
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('pwd', 'Password', 'trim|required');
		$data['redirect'] = $this->post('redirect');
		if($this->form_validation->run()) {
			$res = $this->auth_model->login($this->input->post('email'), $this->input->post('pwd'));
			if($res) {
				$res['logged_in'] = true;
				unset($res['user_password']);
				set_cookie($res);
				if(count($data['redirect']) > 0) {
					redirect(urldecode($data['redirect']));
				}
				else {
					redirect('/');
				}
				return;
			}
			else {
				$this->session->set_flashdata('error_pwd', '<div class="alert alert-danger"><b>ERROR!</b> Invalid credentials</div>');
			}
		}
		$this->load->view('auth/signin', $data);
	}
	
	public function signin_get() {
		$auth_data = get_cookie();
		if($auth_data) {
			redirect('app/status');
			return;
		}
		$data['title'] = 'Sign in';
		$data['redirect'] = $this->get('redirect');
		$this->load->view('auth/signin', $data);		
	}


	public function signup_get() {
		$this->set_response([
			'ststus' => true,
			'message' => "Signup for new account"
		]);
	}
}