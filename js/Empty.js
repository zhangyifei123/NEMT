var app = angular.module("myapp",['ngRoute']);
app.config(["$routeProvider",function($routeProvider){
	$routeProvider.when('/home',{
		templateUrl:"../template/searchfdj.html",
	})
	.otherwise({
		redirectTo:'/home'
	})
}])