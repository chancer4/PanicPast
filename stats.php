<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="userSongs()">
	<?php include('inc/nav.php') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" ng-repeat="(song, number) in songs track by $index">
				{{song}} {{number}}
				
			</div>
				
		</div>

	</div>


</body>
</html>