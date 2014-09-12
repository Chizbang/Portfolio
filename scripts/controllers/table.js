app.factory("getProjects", function($http, $location){
	var projects = {};
	projects.page = $location.path().substring(1, $location.path().length); // I still need to put this in common.js so I dont keep reusing the same code

	projects.getAllProjects = function(){
		return $http({
			method: "GET",
			url: "api/getprojects.php"
		});
	}
	return projects;
});

app.controller("projectPageController", function($scope, $location, $http, $state, getProjects){
	var self = this;

	self.page = $location.path().substring(1, $location.path().length);
	self.projectsContent = [];
	self.headerTitle;
	getProjects.getAllProjects().success(function(reply){
		self.projectsContent = reply;
	});
});