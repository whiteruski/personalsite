/*! XenaResume - v0.1.0 - * Copyright (c) 2016 X; Licensed MIT */
var resize;
var updateStyles = function(){
    clearTimeout(resize);
    resize = setTimeout(function(){

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
    }, 100);

};

$(document).load(updateStyles);

window.onresize = function() {
    updateStyles();
};

$(function(){
    // Set email to avoid spam
    // TODO: contact form instead
    var un = 'xenadeveloper';
    var domain = 'gmail.com';

    document.getElementById('email').innerHTML = un + '@' + domain;
});


var myApp = angular.module('ResumeApp',[]);



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
        $scope.experiences = data;
    });

    // Get libraries and frameworks
    setScopeList('library', function(data) {
        $scope.libraries = data;
    });

}]);


