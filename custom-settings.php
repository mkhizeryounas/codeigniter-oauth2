<?php
// CORS Allow
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: x-requested-with,authorization,content-type,optional-token");
header("Access-Control-Allow-Methods: POST, GET, PATCH, PUT, OPTIONS");
if ( "OPTIONS" === $_SERVER['REQUEST_METHOD'] ) {
        header('Content-Type: application/json');
        echo json_encode([
				'status'=>true,
				'message'=>"CORS is active"
        ]);
        die();
}

if(strtolower($_SERVER["CONTENT_TYPE"]) === "application/json") {
	$_POST = json_decode(file_get_contents('php://input'), true);
    $_GET = json_decode(file_get_contents('php://input'), true);
}

// Log the requests
date_default_timezone_set('Asia/Karachi');

$_req_dump = [];
$_req_dump['method'] = $_SERVER['REQUEST_METHOD'];
$_req_dump['uri'] = $_SERVER["REQUEST_URI"];
$_req_dump['time'] = date("Y-m-d h:i:s a",time());
$_req_dump['data'] = (count($_POST)>0?$_POST:$_GET);
$_show = ">> ".$_req_dump['method']." - ".$_req_dump['time']." | URI: ".$_req_dump['uri']." | Data: ".json_encode($_req_dump['data'])."\n";
$_fp = fopen('application/logs/requests.log', 'a');
fwrite($_fp, $_show);
fclose($_fp);
