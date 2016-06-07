'use strict';
/* Modules */
var app = angular.module('postmanPanel', ['taskControllers',
										  'taskServices',
										  'dashboardControllers',
										  'userControllers',
										  'userServices',
										  'authorizationServices',
										  'ngRoute'
										  ]);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/login',{
      templateUrl: '/assets/partials/user/login-form.html',
      controller: 'LoginUserForm'
    }).
	when('/tasklist',{
			templateUrl: '/assets/partials/task-list.html',
			controller: 'TaskListCtrl'
	}).otherwise({
      templateUrl: '/assets/partials/index.html',
      controller: 'Dashboard'
    });;
}]);