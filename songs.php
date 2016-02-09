<?php 

	 
	$file = file_get_contents('http://api.setlist.fm/rest/0.1/artist/3797a6d0-7700-44bf-96fb-f44386bc9ab2/setlists.json');
	$json = json_decode($file);		
	$totalSets = $json->setlists->{'@total'};
	$totalPages = ceil($totalSets/20);
	$conSong = [];
    for ($i = 1; $i <= 2; $i++) {
 	
        $songs[] = $json->setlists->setlist;
        // get array of sets
        foreach($songs as $array){

        	foreach($array as $object){
        		// loop through sets
        		$date = $object->{'@eventDate'};
        		// $object = $object->sets->set;

        		if(is_array($object->sets->set)){
        			foreach($object->sets->set as $sets){
	        			foreach($sets->song as $concert){
	        				$title = trim($concert ->{'@name'});
	        				$conSong[] = $title;
			       		    if(in_array(($title),$conSong)) {
			        		    	$counterArray[$title]++;
			    			}else{
			    					$conSong[] = $title;	
			    			}
	        			}
        			}
        		}else{
        			foreach($object->sets->set->song as $concert){
	        			$title = trim($concert ->{'@name'});        				
			       		    if(in_array(($title),$conSong)) {
			        		    	$counterArray[$title]++;
			    			}else{
			    					$conSong[] = $title;	
			    			}

        			}        			


        			// print "<pre>";
        			// print_r($sets);

        		}
 
    				
        	}
        }
    }



    
    ksort($counterArray);

    
    // print_r($master_array);
    print_r(json_encode($counterArray));







?>