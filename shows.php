<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="getSets()">
	<?php include('inc/nav.php') ?>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" ng-repeat="sets in data">
				<div class="col-md-12" ng-repeat="set in sets">
					Venue:  {{set.venue['@name']}} Date:  {{set['@eventDate']}} <input ng-model="idSet" ng-change="getId('{{set['@id']}}')" type="checkbox" ng-checked="inSetlist('{{set['@id']}}')">
				</div>
				
			</div>
				
		</div>

	</div>


</body>
</html>