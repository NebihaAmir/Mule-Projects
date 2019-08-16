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

            .when('/create', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/create.html'
            })
            .when('/alluser', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/alluser.html'
            })
            .when('/find', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/find.html'
            })
            .when('/update', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/update.html'
            })

            .when('/delete', {
                controller: 'HomeCtrl',
                templateUrl: 'partials/delete.html'
            })

            .otherwise({ redirectTo: '/' });
    }
})();