<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl" ng-init="getSets()">
	<?php include('inc/nav.php') ?>

<?php
	if(isset($_SESSION['name'])){
		include('showsCheck.php');
	}else{
		print '<h2>You need to be logged in to do this!</h2>';
	}
?>



</body>
</html>