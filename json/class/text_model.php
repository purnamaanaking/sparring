<?php

	class Text_model{
		
		function __construct(){
			include('db/config.php');
		}
		
		function get_row_by_sentiment($sentiment){
			$query = "SELECT * FROM teks WHERE sentiment = '".$sentiment."'";
			$result = mysql_query($query);
			
			$arr = array();
			while($row = mysql_fetch_array($result)){
				$arr[] = $row;
			}
			
			return $arr;
		}
		
	}
	
?>
