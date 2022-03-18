<?php
	
	if(isset($_POST['submit'])){
		
		include('class/json_processing.php');
		include('class/text_mining.php');
		
		$json_processing = new Json_processing();
		$text_mining = new Text_mining();
		
		$allowedExts = array("json");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		
		if (in_array($extension, $allowedExts)){
			if ($_FILES["file"]["error"] > 0){
				echo "Error: " . $_FILES["file"]["error"] . "<br>";
			} else {
				
				/*
				echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				echo "Type: " . $_FILES["file"]["type"] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				echo "Stored in: " . $_FILES["file"]["tmp_name"];
				*/
				
				$fh = fopen($_FILES["file"]["tmp_name"],'r');
				
				$json_processing->start_table();
				
				/* get all header */
				
				/*
				$json_header = false;
				while ($line = fgets($fh)) {
					$json = json_decode($line, true);
					
					if($json != null){
						$json_header_tmp = $json_processing->get_json_header($json);
						
						if(count($json_header_tmp) > count($json_header)){
							$json_header = $json_header_tmp;
						}
					}
					
					
				}
				
				$fh = fopen($_FILES["file"]["tmp_name"],'r');
				$header_status = false;
				
				while ($line = fgets($fh)) {
					$json = json_decode($line, true);
					
					if($json != null){
						if($header_status == false){
							$json_processing->print_header_json($json_header);
							$header_status = true;
							
						} 
						
						$json_processing->start_row();
						$json_processing->print_array_json($json);
						$json_processing->end_row();
					}
					
					
				}
				
				*/
				
				/* end */
				
				$json_header = false;
				$header_name = array(
					'created_at' => 'created_at',
					'text' => 'text'
				);
				while ($line = fgets($fh)) {
					$json = json_decode($line, true);
					
					if($json != null){
						$json_header_tmp = $json_processing->get_specified_header($json, $header_name);
						
						if(count($json_header_tmp) > count($json_header)){
							$json_header = $json_header_tmp;
						}
					}
					
					
				}
				
				/* get specified header */
				
				
				/* end */
				
				$json_header[] = 'sentiment';
				$fh = fopen($_FILES["file"]["tmp_name"],'r');
				$header_status = false;
				
				while ($line = fgets($fh)) {
					$json = json_decode($line, true);
					
					if($json != null){
						if($header_status == false){
							$json_processing->print_header_json($json_header);
							$header_status = true;
							
						} 
						
						$json_processing->start_row();
						$json_processing->print_array_json_specified($json, $header_name);
						$json_processing->end_row();
					}
					
					
				}
				
				$json_processing->end_table();
				
				/* Here starts view section */
				include('views/result_view.php');
				/* Here finish view section */
				
			}
		} else {
			echo 'File yang ddiizinkan adalah .json';
		}
		
		
	} else{
		$form_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';
	
		/* Here starts view section */
		include('views/main_view.php');
		/* Here finish view section */
	}
	
	
?>
