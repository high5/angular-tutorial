var phonecatApp = angular.module('phonecatApp', []);

phonecatApp.controller('PhoneListCtrl', function ($scope, $http) {
  $http.get('/angular-tutorial/server/phones.php').success(function(data) {
    $scope.phones = data;
  });

  $scope.orderProp = 'age';
});

phonecatApp.controller('PhoneListCtrl2', function ($scope, $http) {
  $http.get('/angular-tutorial/server/phones2.php').success(function(data) {
    $scope.phones = data.splice(0, 2);
  });

  $scope.orderProp = 'age';
});

phonecatApp.controller('PhoneListCtrl3', function ($scope, $http) {
  $http.get('/angular-tutorial/server/phones3.php').success(function(data) {
    $scope.phones = data;
  });

  $scope.orderProp = 'age';
});

