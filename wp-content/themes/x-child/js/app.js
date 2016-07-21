var app = angular.module('IdentityInclusion', [
    'ngRoute',
    'ngSanitize'
])
.config(function($routeProvider, $locationProvider) {
    'use strict';
    
    $locationProvider.html5Mode(true);
    
    $routeProvider
        .when('/', {
            templateUrl: myLocalized.views + 'home.php',
            controller: 'HomeCtrl',
            controllerAs: 'home'
        })
        .otherwise({
            redirectTo: '/'
        });
        
});