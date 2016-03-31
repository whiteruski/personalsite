/*! XenaResume - v0.1.0 - * Copyright (c) 2016 X; Licensed MIT */

var callback = function(){
    $('.item-skills').each(function(){
        newWidth = $(this).parent().width() * $(this).data('percent');
        $(this).width(0);
        $(this).animate({
            width: newWidth,
        }, 1000);
    });
    $('.icons-red').each(function(){
        height = $(this).height();
        $(this).animate({
            height: 14,
        }, 2000);
    });
};
$(document).ready(callback);

var resize;
window.onresize = function() {
    clearTimeout(resize);
    resize = setTimeout(function(){
        callback();
    }, 100);
};

var myApp = angular.module('ResumeApp',[]);



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


