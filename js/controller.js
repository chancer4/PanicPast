var panicPast = angular.module('panicPast', [])
var url = "http://local-panicpast.com/setlist.php";
var userSetsArray = [];


panicPast.controller('panicCtrl', function ($scope, $http){

	$http({
            url: 'getChecks.php',
            method: "GET",
            headers: {'Content-Type': 'application/json'}
        }).success(function (data, status, headers, config) { 
        		$scope.userSets = data;                       	 
            	
            	for(i=0;i<data.length;i++){
            		userSetsArray.push(data[i].setId);
            		
            	}
            
            }).error(function (data, status, headers, config) {
                $scope.status = status;
            });	

	$scope.getSets = function(){

		$http.get(url).success( function (data){
			console.log(data);
			$scope.data = data;
		})
	}
	$scope.getId = function(setId){
		console.log(setId);
		$http({
            url: 'sets.php',
            method: "POST",
            data: setId,
            headers: {'Content-Type': 'application/json'}
        }).success(function (data, status, headers, config) {                        	 
            	$scope.setid = setId;
            	console.log(data);
            }).error(function (data, status, headers, config) {
                $scope.status = status;
            });
	}
	$scope.inSetlist = function(setId){
		if(userSetsArray.indexOf(setId) != -1){
			return true;
		}else{
			return false;
		}
	}

	$scope.userSongs = function(){
		
		$http.get("http://local-panicpast.com/songs.php").success( function (songs){
			console.log(songs);
			$scope.songs = songs;
		})
	}
});





