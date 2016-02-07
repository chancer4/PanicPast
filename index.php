<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="getSets()">
	<?php include('inc/nav.php') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" ng-repeat="sets in data">
				<div class="col-md-6 col-md-offset-3" ng-repeat="set in sets">
					{{set.venue['@name']}} {{set['@eventDate']}} <input ng-model="getId" ng-true-value="(set['@id'])" type="checkbox">
				</div>
				
			</div>
				
		</div>

	</div>


</body>
</html>