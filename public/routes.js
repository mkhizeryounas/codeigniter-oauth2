app.config(function($stateProvider,$urlRouterProvider) {
  $stateProvider
  .state('home', {
    templateUrl: base_url+'public/partials/home.html',
    url: '/home',
    controller: "homeCtrl",
    data : {
      authLevel: "admin"
    }
  })
  .state('default', {
    templateUrl: base_url+'public/partials/home.html',
    url: '/',
    controller: "homeCtrl",
    data : {
      authLevel: "admin"
    }
  })

  $urlRouterProvider.otherwise('/home');
});