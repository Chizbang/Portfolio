app.controller("projectPageController", function($scope, $location, $http, $state){
	var self = this;

	self.page = $location.path().substring(1, $location.path().length);
	self.projectsContent = [];
	self.headerTitle;
	$http({
			method: "GET",
			url: "api/getprojects.php",
		}).success(function(msg){
			self.projectsContent = msg;
		});
});