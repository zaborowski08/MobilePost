'use strict';
/* Controllers */
var taskControllers = angular.module('taskControllers', []);

taskControllers.controller('TaskListCtrl', ['$scope', 'Task',
 function($scope, Task) {
$scope.tasks = Task.query();
}]);
