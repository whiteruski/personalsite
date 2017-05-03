
myApp.controller('IndexCtrl', ['$scope', '$http', '$sce', function($scope, $http, $sce) {

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
        updateStyles();
    });

    // Get languages
    setScopeList('language', function(data) {
        $scope.languages = data;
        updateStyles();
    });

    // Get hobbies
    setScopeList('hobby', function(data) {
        $scope.hobbies = data;
    });

    // Get exp
    setScopeList('experience', function(data) {
        angular.forEach(data, function(value, key) {
          value.description = $sce.trustAsHtml(value.description);
        });

        $scope.experiences = data;
    });

    // Get libraries and frameworks
    setScopeList('library', function(data) {
        $scope.libraries = data;
    });

}]);
