var panicPast = angular.module('panicPast', [])
var url = "http://local-panicpast.com/setlist.php";
var setid



panicPast.controller('panicCtrl', function ($scope, $http){

	$scope.getSets = function(){

		$http.get(url).success( function (data){
			console.log(data);
			// console.log(Object.keys(data));
			// console.log(Object.getOwnPropertyNames(data));
			$scope.data = data;

		})
	}
	$scope.getId = function(setId){
		$http.post(url, setid )
			
		
	}
});





