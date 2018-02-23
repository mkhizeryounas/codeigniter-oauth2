$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		$(document).ready(function() {
			
		})
		
		function mainS(){
			$('#main-status').html('<span class="alert alert-success"><i class="fa fa-check"></i> Successful</span>');
			$('#main-status').fadeToggle();
			$('#main-status').delay(1000).fadeToggle();
		}
		function mainE(){
			$('#main-status').html('<span class="alert alert-danger"><i class="fa fa-times"></i> Unsuccessful</span>');
			$('#main-status').fadeToggle();
			$('#main-status').delay(1000).fadeToggle();
		}
		function start() {
			$('#wait').fadeIn()
		}
		function end() {
			$('#wait').fadeOut()
		}
		function _error() {
			end();
			$('#error').fadeIn()
			$('#error').delay(1500).fadeOut()
		}
		function _success() {
			end();
			$('#success').fadeIn()
			$('#success').delay(1500).fadeOut()
		}

		function validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}


function notification(type, msg) {
    // Get the snackbar DIV
    $('#sd-msg').html(msg);

	if(type == 'success')
    	$('#snackbar').prop('style', 'background-color:#7bc475'); //SUCCESS
    else if (type == 'danger')
    	$('#snackbar').prop('style', 'background-color:#ff4d4d'); //ERROR
    else 
    	$('#snackbar').prop('style', 'background-color:#444'); //ERROR

    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}