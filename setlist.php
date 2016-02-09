	<?php 
		$file = file_get_contents('http://api.setlist.fm/rest/0.1/artist/3797a6d0-7700-44bf-96fb-f44386bc9ab2/setlists.json');
		$json = json_decode($file);		
		$totalSets = $json->setlists->{'@total'};
		$totalPages = ceil($totalSets/20);

    	

        for ($i = 1; $i <= 2; $i++) {
            $result = file_get_contents('http://api.setlist.fm/rest/0.1/artist/3797a6d0-7700-44bf-96fb-f44386bc9ab2/setlists.json?p='.$i); 
            $jsonResult = ($result);
            $phparray = json_decode($jsonResult);
            $master[] = $phparray->setlists->setlist;
            
        }

    print_r(json_encode($master));

	?>