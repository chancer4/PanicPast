<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="userSongs()">
	<?php include('inc/nav.php') ?>

	<div class="container Stats" >
		<div class="row">
		<div class="col-md-4 col-md-offset-4" id="nameText">Song</div>
		<div class="col-md-2" id="timesPlayed">Times Played</div>
		<div class="col-md-6 col-md-offset-4" id="hrTag">
			<hr>
		</div>
		</div>

		<div class="row">
			<div id="stats" ng-repeat="(song, number) in songs track by $index">
				<span id="songName" class="col-md-4 col-md-offset-4">{{song}} -</span> <span id="songCount" class="col-md-2">{{number}}</span>
				
			</div>
				
		</div>

	</div>


</body>
</html>