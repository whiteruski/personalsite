
myApp.controller('IndexCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.skills = [];
    $scope.languages = [];
    $scope.hobbies = [];

    // Get skills
    $http({
        method: 'GET',
        url: '/api/skill',
        headers: {
            'Content-Type': 'application/json'
        }
    }).success(function (data) {
        $scope.skills = data;
    });

    // Get languages
    $http({
        method: 'GET',
        url: '/api/language',
        headers: {
            'Content-Type': 'application/json'
        }
    }).success(function (data) {
        $scope.languages = data;
    });

    // Get hobbies
    $http({
        method: 'GET',
        url: '/api/hobby',
        headers: {
            'Content-Type': 'application/json'
        }
    }).success(function (data) {
        $scope.hobbies = data;
    });

    var setScopeList = function(controller, scopeVar) {


    }


}]);
