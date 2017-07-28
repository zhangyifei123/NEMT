/*
* @Author: Marte
* @Date:   2017-07-21 16:17:50
* @Last Modified by:   Marte
* @Last Modified time: 2017-07-26 17:38:36
*/

'use strict';
var  app = angular.module('m_app',['ngRoute']);
app.config(['$routeProvider',function($routeProvider){
    $routeProvider.when('/home',{
        templateUrl:'../template/Interactive_area.html',
        controller:"home"
    })
    .when('/second_page',{
        templateUrl:"../template/detail_page.html",
        controller:"detail_page"
    })
    .when('/third_page',{
        templateUrl:"../template/mutual_content.html",
        controller:"mutual_content"
    })

    .otherwise({
        redirectTo:'/home'
    })
}]);
