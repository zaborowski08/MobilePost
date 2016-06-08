'use strict';
/* Controllers */
var taskControllers = angular.module('taskControllers', []);
var userControllers = angular.module('userControllers', []);
var dashboardControllers = angular.module('dashboardControllers', []);

taskControllers.controller('TaskListCtrl', ['$scope', 'Task',
 function($scope, Task) {
$scope.tasks = Task.query();
}]);

dashboardControllers.controller('Dashboard', ['$scope', '$window','Authorization', 
  function($scope, $window, Authorization){
    $scope.authorization = false;
    
    Authorization.get(function(data){
      if(data.roles != 'ROLE_ADMIN'){
        $window.location.href = '#/login';
      }
      else{
        $scope.authorization = true;
      }
    });
  }
]);

userControllers.controller('LoginUserForm', ['$scope', '$http', '$window', 'User', 
  function ($scope, $http, $window, User) {
    $scope.submit = function () {
      User.login($scope.user, function(data, status, headers, config){
          $window.location.href = '#';
      }, function(data, status, headers, config){
        console.log(data);
        $scope.errors = {};
        
        if(data.status == 400){
          $scope.errors = data.data.message;
        }
      });
    }
  }
]);