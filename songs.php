<?php 
    header('Access-Control-Allow-Origin: *');
	include('inc/db_connect.php');
    $setsDB = DB::query('SELECT * from shows where uid ='.$_SESSION['uid']);

    foreach($setsDB as $setDB){
        $setsArray[] = $setDB['setId'];

    };


	$file = file_get_contents('http://api.setlist.fm/rest/0.1/artist/3797a6d0-7700-44bf-96fb-f44386bc9ab2/setlists.json');
	$json = json_decode($file);		
	$totalSets = $json->setlists->{'@total'};
	$totalPages = ceil($totalSets/20);
	$conSong = [];

    foreach($json->setlists->setlist as $array){               
        $showID = $array->{'@id'};       
        if(in_array(($showID), $setsArray)){
          if(is_array($array->sets->set)){
             foreach($array->sets->set as $sets){
                foreach($sets->song as $concert){
                   $title = trim($concert ->{'@name'});
                   $conSong[] = $title;
                   if(in_array(($title),$conSong)) {
                      $counterArray[$title]++;

                  }else{
                    $conSong[] = $title;	
                    $counterArray[$title]++;
                }
            }
        }
    }else{
     foreach($array->set as $concert){

        $title = trim($concert ->{'@name'});        				
        if(in_array(($title),$conSong)) {
          $counterArray[$title]++;
      }else{
        $conSong[] = $title;	
        $counterArray[$title]++;
    }
}
}
}else{

}	
}




    

    ksort($counterArray);
    // print "<pre>";
    print_r(json_encode($counterArray));







?>