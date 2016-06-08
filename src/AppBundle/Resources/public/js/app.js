'use strict';
/* Modules */
var app = angular.module('postmanPanel', ['taskControllers',
										  'taskServices',
										  'dashboardControllers',
										  'userControllers',
										  'userServices',
											'postmanControllers',
											'postmanServices',
										  'authorizationServices',
											'postmanDirectives',
										  'ngRoute'
										  ]);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/login',{
      controller: 'LoginUserForm'
    }).
	when('/postman/new', {
      controller: 'CreatePostmanForm'
  }).
	when('/tasklist',{
			controller: 'TaskListCtrl'
	}).otherwise({
      controller: 'Dashboard'
    });;
}]);