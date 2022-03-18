<?php

	class Json_processing{
		
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
		
		function get_json_header($array){
			$result = array();
			
			foreach($array as $key => $row){
				if(is_array($row) == false){
					$result[] = $key;
				} else {
					$tmp = $this->get_json_header($row);
					foreach($tmp as $row2=>$key2){
						$result[] = $key2;
					}
				}
			}
			
			return $result;
		}
		
		function print_header_json($array){
			echo '<tr>';
			foreach($array as $row){
				echo '<th style="border: 1px solid;">'.$row.'</th>';
			}
			echo '</tr>';
		}
		
		
		function print_array_json($array){
			foreach($array as $key=>$row){
				if(is_array($row) == false){
					echo '<td style="border: 1px solid;">'.$row.'</td>';
				} else {
					$this->print_array_json($row);
				}
			}
		}
		
		function print_array_json_specified($array, $header_name){
			foreach($array as $key=>$row){
				if(is_array($row) == false){
					if(isset($header_name[$key])) {
						echo '<td style="border: 1px solid;">'.$row.'</td>';
					}
						
				} else {
					$this->print_array_json_specified($row, $header_name);
				}
			}
		}
		
		function get_specified_header($array, $arr_name){
			$result = array();
			
			foreach($array as $key => $row){
				if(is_array($row) == false){
					if(isset($arr_name[$key])) $result[] = $key;
					
				} else {
					$tmp = $this->get_specified_header($row, $arr_name);
					foreach($tmp as $row2=>$key2){
						$result[] = $key2;
					}
				}
			}
			
			return $result;
		}
		
	}
	
?>
