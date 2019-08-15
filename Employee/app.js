(function () {
    'use strict';

    angular
        .module('app', ['ngRoute', 'ngCookies'])
        .config(config)       

    config.$inject = ['$routeProvider', '$locationProvider'];
    function config($routeProvider, $locationProvider) {
        $routeProvider
            .when('/', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/home.html'
            })

            
            .when('/alluser', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/alluser.html'
            })
            

            .otherwise({ redirectTo: '/' });
    }
})();