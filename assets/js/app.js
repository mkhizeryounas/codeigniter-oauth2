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
		function error() {
			end();
			$('#error').fadeIn()
			$('#error').delay(1500).fadeOut()
		}
		function success() {
			end();
			$('#success').fadeIn()
			$('#success').delay(1500).fadeOut()
		}
		function validateEmail(email) {
			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			return re.test(email);
		}