var app = angular.module('cartify', [
  'ngStorage',
  'ui.router',
  'angular-loading-bar',

]);
app.config(function($httpProvider) {
  $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
  $httpProvider.interceptors.push('httpRequestInterceptor');
});
app.factory('httpRequestInterceptor', function ($localStorage, $rootScope) {
 return {
   request: function (config) {
    
    return config;
   }
 };
});
app.run(function($localStorage, $state, $rootScope, $http) {
	$rootScope.$state = $state;
	$rootScope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams, options) {
		$http.post(base_url+'open/check_auth')
		.then(function(res) {
			if(res.data.logged_in != true) {
				event.preventDefault();
            	location.reload();
			}
		})
	});
});
