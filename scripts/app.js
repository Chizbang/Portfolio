var app = angular.module("portfolio", ['dotjem.routing']);

app.service('menubar', function(){
	var self = this;

	self.register = function(title, state){
		self.items.push({title: title, state: state});
	}
});

app.service('pages', function($http){
	var self = this;
	var promise = null;

	self.getPages = function(){
		if(!promise){
			promise = $http.get("api/getpages.php");
		}
		return promise;
	}
});

app.config(function($locationProvider, $routeProvider, $stateProvider){
	$routeProvider.otherwise({redirectTo: '/home'});

	$stateProvider.state('home', {
		route: '/home',
		views: {
			'main': {
				template: 'template/main.html'
			}
		}
	});

	$stateProvider.state(['$register', 'pages', function(register, pages){
		return pages.getPages().then(function(data){
			for(state in data.data){
				register(data.data[state].pagename, {
					route: data.data[state].path,
					views: {'main': {template: data.data[state].templateUrl}}
				});
			}
		})
	}]);

});

app.controller("mainController", function($scope){
	var self = this;
});

app.controller("menuPages", function($scope, pages){
	var menu = this;
	menu.list = [];

	pages.getPages().then(function(data){
		menu.list = data.data;
	});
});

app.directive('side', function(){
	return{
		restrict: 'E',
		templateUrl: 'templates/side.html'
	}
});

app.filter('unsafe', function($sce){
	return function(val){
		return $sce.trustAsHtml(val);
	}
});
