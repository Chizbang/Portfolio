app.factory("getContent", function($http, $location){
	var content = {};

	content.getPageContent = function(){
		var page = $location.path().substring(1, $location.path().length); // I still need to put this in common.js so I dont keep reusing the same code
		return $http({
			method: "GET",
			url: "api/getcontent.php?page="+page,
		});
	}
	return content;
});

app.controller("primaryPageController", function($scope, $location, getContent){
	var self = this;
	self.pageContent = [];	
	getContent.getPageContent().success(function(reply){
		self.pageContent = reply;
	});
});