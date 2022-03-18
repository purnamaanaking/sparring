<?php

	class Text_model{
		
		function __construct(){
			include('db/config.php');
		}
		
		function get_all_keywords(){
			$query = "SELECT * FROM keyword";
			$result = mysql_query($query);
			
			$arr = array();
			while($row = mysql_fetch_array($result)){
				$arr[] = $row;//var_dump($row);echo '<br><br>';
			}
			
			return $arr;
		}
		
		function get_total_sum(){
			$cquery = "SELECT COUNT(*) as count FROM keyword";
			// echo $cquery;
			$cresult = mysql_query($cquery);
			// echo 'num: '.mysql_num_rows($cresult);
			$c = 0;
			while($row = mysql_fetch_array($cresult)){
				$c = $row['count'];//var_dump($row);echo '<br><br>';
			}
			
			$pquery = "SELECT SUM(Pscore) as total FROM keyword";
			$presult = mysql_query($pquery);
			$psum = 0;
			while($row = mysql_fetch_array($presult)){
				$psum = $row['total'] + $c;//var_dump($row);echo '<br><br>';
			}
			
			$nquery = "SELECT SUM(Nscore) as total FROM keyword";
			$nresult = mysql_query($nquery);
			$nsum = 0;
			while($row = mysql_fetch_array($nresult)){
				$nsum = $row['total'] + $c;//var_dump($row);echo '<br><br>';
			}
			
			
			return array(
				'negative' => $nsum,
				'positive' => $psum,
				'total' => (intval($psum) + intval($nsum))
			);
		}
		
		function get_row_by_sentiment($sentiment){
			$query = "SELECT * FROM teks WHERE sentiment = '".$sentiment."'";
			$result = mysql_query($query);
			
			$arr = array();
			while($row = mysql_fetch_array($result)){
				$arr[] = $row;//var_dump($row);echo '<br><br>';
			}
			
			return $arr;
		}
		
/* 		function get_sum_frekuensi(){
			$query = "SELECT SUM(frekuensi) as total FROM teks";
			$result = mysql_query($query);
			
			$arr = 0;
			while($row = mysql_fetch_array($result)){
				$arr = $row['total'];//var_dump($row);echo '<br><br>';
			}
			
			return $arr;
		} */
		
	}
	
?>
