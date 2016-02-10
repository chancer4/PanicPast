<?php 

	include('inc/db_connect.php');
    $setsDB = DB::query('SELECT * from shows where uid ='.$_SESSION['uid']);

    foreach($setsDB as $setDB){
        $setsArray[] = $setDB['setId'];

    };
    print "<pre>";
    print_r($setsArray);

	$file = file_get_contents('http://api.setlist.fm/rest/0.1/artist/3797a6d0-7700-44bf-96fb-f44386bc9ab2/setlists.json');
	$json = json_decode($file);		
	$totalSets = $json->setlists->{'@total'};
	$totalPages = ceil($totalSets/20);




	$conSong = [];
        // get array of sets
        foreach($json->setlists->setlist as $array){
        	foreach($array as $object){
        		// loop through sets
        		$showID = $object->{'@id'};
                if(in_array(($showID), $setsArray)){
                    // print $showID;
                    // print "<pre>";
                    // print_r($setsArray);
                    // print '</pre>';
                    // print '<hr />';
        		// $object = $object->sets->set;

            		if(is_array($object->sets->set)){
            			foreach($object->sets->set as $sets){
    	        			foreach($sets->song as $concert){
    	        				$title = trim($concert ->{'@name'});
    	        				$conSong[] = $title;
    			       		    if(in_array(($title),$conSong)) {
    			        		    	$counterArray[$title]++;
                                        // print $title . ' - ' . $counterArray[$title];
                                        // print '<hr />';
    			    			}else{
    			    					$conSong[] = $title;	
                                        $counterArray[$title]++;
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
                                        $counterArray[$title]++;
    			    			}

            			}
            		}
    		    }else{

                }	
        	}
        }



    

    
    // print_r($master_array);
    print "<pre>";
    print_r($counterArray);







?>