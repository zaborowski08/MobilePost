'use strict';
/* Modules */
var app = angular.module('postmanPanel', ['taskControllers','taskServices','ngRoute']);
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
otherwise({
templateUrl: '/bundles/app/partials/task-list.html',
controller: 'TaskListCtrl'
});
}]);
