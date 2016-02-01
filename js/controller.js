var panicPast = angular.module('panicPast', []);
var url = "http://local-panicpast.com/setlist.php";


panicPast.controller('panicCtrl', function ($scope, $http){

	$scope.getSets = function(){

		$http.get(url).success( function (data){
			console.dir(data);

		})
	}


});





