<?php
	if(isset($_POST['submit'])){	
		include('class/csv_processing.php');
		include('class/db/config.php');
		
		$table_name = 'teks';
		
		$csv = new Csv_processing();
		
		$allowedExts = array("csv");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		
		if (in_array($extension, $allowedExts)){
			if ($_FILES["file"]["error"] > 0){
				echo "Error: " . $_FILES["file"]["error"] . "<br>"; 
			} else {
				$header = array('id','date','text', 'sentiment');
				$data = $csv->convert_csv_to_array($_FILES["file"]["tmp_name"]);
				
				$header_data = "";
				foreach($header as $row){
					$header_data .= $row.",";
				}
				$header_data = substr($header_data, 0, strlen($header_data)-1);
				
				$csv->start_table();
				
				$csv->start_row();
				$csv->set_header($header);
				$csv->end_row();
				
				foreach($data as $key=>$val){
					$csv->start_row();
					
					$tweet_data = "";
					
					foreach($val as $key2=>$val2){
						$csv->set_td($val2);
						
						if($key2 == 'id') $tweet_data .= $val2.",";
						else $tweet_data .= "'".$val2."',";
						
					}
					$tweet_data = substr($tweet_data, 0, strlen($tweet_data)-1);
					//echo "INSERT INTO ".$table_name." (".$header_data.") VALUES (".$tweet_data.")<br>";
					mysql_query("INSERT INTO ".$table_name." (".$header_data.") VALUES (".$tweet_data.")");
					
					$csv->end_row();
				}
				
				$csv->end_table();
			}
		} else {
			echo 'File yang diizinkan adalah .csv';
		}
	} else{
		$form_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';
	
		/* Here starts view section */
		include('views/main_view.php');
		/* Here finish view section */
	}
?>
