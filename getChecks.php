<?php 
	include('inc/db_connect.php');
	$sets = DB::query('SELECT * from shows where uid ='.$_SESSION['uid']);

	foreach($sets as $set){
		$setsArray[] = $set;
	};

	print json_encode($setsArray)





?>