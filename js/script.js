// script.js

	// create the module and name it scotchApp
	// also include ngRoute for all our routing needs
	var scotchApp = angular.module('scotchApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider
		
			// route for the home page
			.when('/', {
				templateUrl	: 'pages/angulare.html',
				controller 	: 'mainController'
			})
			
			// route for about page
			.when('/about', {
				templateUrl	: 'pages/about.html',
				controller	: 'aboutController'
			})
			
			// route for contact page
			.when('/contact', {
				templateUrl	: 'pages/contact.html',
				controller	: 'contactController'
			})		
			
			// route for cdcol page
			.when('/cdcol', {
				templateUrl	: 'pages/cdcol.html',
				controller	: 'cdcolController'
			})
		
	});


	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Everyone come and see how good I look!'; 
	});


	scotchApp.controller('aboutController', function($scope) {
		$scope.message = 'Look! I am an about page.';
	});


	scotchApp.controller('contactController', function($scope) {
		$scope.message = 'Contact us! JK. This is just a demo';
	});
	
	scotchApp.controller('cdcolController', function($scope, $http) {
		// $http.get("http://localhost/xperimen/cdcol")
		$http.get("cdcol.php")
		.then(function(response) {
			$scope.pgws = response.data.records;  
		});  
	});

