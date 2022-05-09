<?php
	class Text_model{
		function __construct(){
			include('db/config.php');
		}
		
		function get_all_keywords() {
			$query = "SELECT * FROM keywords";
			$result = mysql_query($query);
			
			$arr = array();
			while ($row = mysql_fetch_array($result)) {
				$arr[] = $row;
			}
			
			return $arr;
		}
		
		function get_total_sum($key_column_name) {
			$total = 0;

			$query = "SELECT SUM(".$key_column_name.") as total FROM keywords";
			$result = mysql_query($query);
			$sum = 0;
			while ($item = mysql_fetch_array($result)) {
				$sum = $item['total'];
			}
			$total += $sum;
			
			return $total;
		}
	}
?>
