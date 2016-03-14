'use strict';

var appAdmin = angular.module('appAdmin', ['ngRoute', 'ui.router']);

appAdmin.config([
    '$routeProvider', '$locationProvider',
    function($routeProvide, $locationProvider){
        $locationProvider.html5Mode({
            enabled: true,
            requireBase: false
        });
        $routeProvide
            .when('/admin',{
                templateUrl:'/tpl/dashboard',
                controller:'DashboardCtrl'
            })
            .when('/admin/login',{
                templateUrl:'/tpl/login',
                controller:'LoginCtrl'
            })
            .when('/contact',{
                templateUrl:'template/contact.html',
                controller:'ContactCtrl'
            })
            .when('/phones/:phoneId', {
                templateUrl:'template/phone-detail.html',
                controller:'PhoneDetailCtrl'
            })
            .otherwise({
                redirectTo: '/'
            });
    }
]);

appAdmin.factory('globalData', function() {
    return {
        sections: {
            portfolio: {url: '/admin', name: 'Portfolio', active: false},
            users: {url: '/admin/users', name: 'Users', active: false}
        }
    }
});

appAdmin.controller('DashboardCtrl', ['$scope', '$rootScope', '$http', '$location', 'globalData', function($scope, $rootScope, $http, $location, globalData) {

    var sections = globalData.sections.portfolio.active = true;
    $rootScope.sections = globalData.sections;
    $scope.isError = {status: false};
    $scope.auth = false;

    var init = $http.get('/admin/api/init').then(function successCallback(res) {
            $scope.auth = res.auth;
        },
        function errorCallback(res)
        {
            $scope.isError = {status: true, description: 'connectionError'}
        }
    );

    if ($scope.auth)
    {

    }
    else
    {
        if($scope.isError.status)
        {

        }
        else
        {
            $location.path('/admin/login');
        }
    }

}]);

appAdmin.controller('LoginCtrl', ['$scope', '$rootScope', '$http', '$location', 'globalData', function ($scope, $rootScope, $http, $location, globalData) {

}]);