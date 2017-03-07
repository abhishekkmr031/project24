<?php
//header('Content-Type: application/json');
 //$data = array();

		foreach ($matches as $key) { 
			 
			//$data[] = $key;
			echo $key->matchname."<br>";
						echo $key->score;


			
		 }
		 
		 // print json_encode($data);

		

		//echo site_url('application/views/dataview.php');
		 //print json_encode($data);

 ?>
