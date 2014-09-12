app.factory("getcontent", function($http, $location){
	var content = {}
	content.page = $location.path().substring(1, $location.path().length);
	console.log(content.page+" factoruy");
	content.getPageContent = function(ctrl){
		$http({
			method: "GET",
			url: "api/getcontent.php?page="+content.page,
		}).success(function(msg){
			ctrl.pageContent = null;
			ctrl.pageContent = msg;
		});
	}
	return content;
});

app.controller("primaryPageController", function($scope, $location, $http, $state, getcontent){
	var self = this;

	self.page = $location.path().substring(1, $location.path().length);
	console.log(self.page + " Controller");
	self.pageContent = [];
	self.headerTitle;
	$http({ 
		method: "GET",
		url:'api/getcontent.php?page='+self.page,
	}).success(function(msg){
		self.pageContent = msg;
	});


});