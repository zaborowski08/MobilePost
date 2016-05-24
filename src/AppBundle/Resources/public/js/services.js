'use strict';
/* Services */
var taskServices = angular.module('taskServices', ['ngResource']);
taskServices.factory('Task', ['$resource', 
  function($resource){
    return $resource('http://localhost:8000/postmantaskpanel.json', {}, {
     query: {method: 'GET', isArray: true, headers: {'Accept': 'application/json'}
    }
});
}]);
