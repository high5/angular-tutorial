angular.module('App', [])
  .run(['$rootScope', function (scope) {
    alert('test');
    scope.$on('notification', function (evt, text) {
      // ...
    });
  }]);