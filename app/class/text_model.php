<?php
	class Text_model{
		function __construct(){
			include('db/config.php');
		}
		
		function get_all_keywords() {
			$query = "SELECT * FROM keyword";
			$result = mysql_query($query);
			
			$arr = array();
			while ($row = mysql_fetch_array($result)) {
				$arr[] = $row;
			}
			
			return $arr;
		}
		
		function get_total_sum() {
			$cquery = "SELECT COUNT(*) as count FROM keyword";
			$cresult = mysql_query($cquery);
			$c = 0;
			$total = 0;

			while ($row = mysql_fetch_array($cresult)) {
				$c = $row['count'];
			}

			// Get lecturers for looping
			$lecturers = mysql_query("SELECT * FROM lecturers");
			$rows = array();
			while ($row = mysql_fetch_array($lecturers)) {
				$rows[] = $row;
			}
			foreach($rows as $row){
				$query = "SELECT SUM(".$row['key_col_name'].") as total FROM keyword";
				$result = mysql_query($query);
				$sum = 0;
				while ($item = mysql_fetch_array($result)) {
					$sum = $item['total'] + $c;
				}
				$total += $sum;
			}
			
			return array(
				'total' => $total
			);
		}
	}
?>
