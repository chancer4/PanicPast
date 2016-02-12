<?php include('inc/db_connect.php') ?> 
<!DOCTYPE html>
<html ng-app="panicPast">
	<?php include('inc/head.php') ?> 
<body ng-controller="panicCtrl">
	<?php include('inc/nav.php') ?>


	 <?php 
        if(isset($_SESSION['uid'])){
        	include('welcomeback.php');
        }else{
        	include('welcomesplash.php');
        }
      ?>



</body>
</html>