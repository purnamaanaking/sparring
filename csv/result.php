<?php

	include('class/upload_file.php');
	
	if(isset($_POST['submit'])){
		
		$allowedExts = array("json");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		
		if (in_array($extension, $allowedExts)){
			if ($_FILES["file"]["error"] > 0){
				echo "Error: " . $_FILES["file"]["error"] . "<br>";
			} else {
				
				
				
				echo "Upload: " . $_FILES["file"]["name"] . "<br>";
				echo "Type: " . $_FILES["file"]["type"] . "<br>";
				echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
				echo "Stored in: " . $_FILES["file"]["tmp_name"];
			}
		}
		
		
	}
	
	$form_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';
	
	/* Here starts view section */
	include('views/main_view.php');
	
	/* Here finish view section */
	
?>
