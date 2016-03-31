
myApp.controller('IndexCtrl', ['$scope', '$http', function($scope, $http) {

    var setScopeList = function(controller, callback) {
        $http({
            method: 'GET',
            url: '/api/' + controller,
            headers: {
                'Content-Type': 'application/json'
            }
        }).success(function (data) {
            callback(data);
        });

    };

    // Get skills
    setScopeList('skill', function(data) {
        $scope.skills = data;
    });

    // Get languages
    setScopeList('language', function(data) {
        $scope.languages = data;
    });

    // Get hobbies
    setScopeList('hobby', function(data) {
        $scope.hobbies = data;
    });


}]);
