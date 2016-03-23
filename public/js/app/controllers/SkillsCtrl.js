
myApp.controller('SkillsCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.skills = [];

    $http({
        method: 'GET',
        url: '/api/Skill',
        headers: {
            'Content-Type': 'application/json'
        }
    }).success(function (data) {
        $scope.skills = data;
    });
}]);
