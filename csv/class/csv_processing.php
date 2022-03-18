<?php

	class Csv_processing{
	
		private $textmining;
		function __construct(){
			include('text_mining.php');
			$this->textmining = new Text_mining();
		}
		
		function start_table(){
			echo '<table style="border-collapse:collapse;">';
		}
		
		function end_table(){
			echo '</table>';
		}
		
		function start_row(){
			echo '<tr>';
		}
		
		function end_row(){
			echo '</tr>';
		}
		
		function set_header($arr){
			foreach($arr as $row){
				$this->set_td($row);
			}
		}
		
		function set_data($arr){
			foreach($arr as $row){
				$this->set_td($row);
			}
		}
		
		function set_td($val){
			echo '<td style="border: 1px solid;">'.$val.'</td>';
		}
		
		function convert_csv_to_array($file){
			$return = array();
			
			$i = 0;
			
			if (($handle = fopen($file, "r")) !== FALSE) {
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
				
					if($i == 0)  {
						$i++;
						continue;
					}
					
					$num = count($data);
					$tmp = array();
					$teks = '';
					for ($c=0; $c < $num; $c++) {
						
						if($c == 0) {
							$tmp['id'] = $data[$c];
							
						}
						if($c == 1) $tmp['date'] = $data[$c];
						if($c == 2) {
							$tmp['text'] = $data[$c];
							$teks = $data[$c];
						}
/* 						if($c == 3) $tmp['longitude'] = $data[$c];
						if($c == 4) $tmp['latitude'] = $data[$c]; */
					}
					
					//echo 'teks: '.$teks.'<br>';
					
					$arr_result = $this->textmining->get_sentiment_result($teks);
					//$tmp[] = $arr_result['indekspos'];
					//$tmp[] = $arr_result['indeksneg'];
					$tmp['sentiment'] = $arr_result['sentiment'];
					
					
					$return[] = $tmp;
				}
				fclose($handle);
			}
			
			return $return;
		}
		
	}
	
?>

