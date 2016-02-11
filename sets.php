<?php 
	header('Access-Control-Allow-Origin: *');
	include('inc/db_connect.php');
	$data = file_get_contents('php://input');
	// print $_SESSION['uid'];
	DB::query('SELECT * from shows WHERE uid = '.$_SESSION['uid'].' AND setId = "'. $data .'"');
	if(DB::count() == 0){
		//if count is 0 user doesn't have this set list so we insert it
		DB::insert('shows', array(
		'uid' => $_SESSION['uid'],
		'setId' => $data
		));
	} else{
		DB::query('DELETE from shows WHERE uid = '.$_SESSION['uid'].' AND setId = "'. $data .'"');
	}
	
	exit;



?>