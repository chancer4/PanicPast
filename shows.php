<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="getSets()">
	<?php include('inc/nav.php') ?>

	<div class="container">
		<div class="row">
			<label >Search:<input id="searchBox" type="text" ng-model="searchText" placeholder="Narrow it down"></label>
		</div>
		<div class="row A">
			<div class="" ng-repeat="sets in data">
				<div class="col-md-12 showRepeat" ng-repeat="set in sets | filter:searchText:strict">

					Venue:  {{set.venue['@name']}} Date:  {{set['@eventDate']}} <input ng-model="idSet" ng-change="getId('{{set['@id']}}')" type="checkbox" ng-checked="inSetlist('{{set['@id']}}')">
				</div>
				
			</div>
		</div>
				
		

	</div>


</body>
</html>