<?php
	class Text_mining{
		function __construct() {
			require_once('text_model.php');
			$this->model = new Text_model();
		}
		
		private $model;
		
		function get_sentiment_result($text) {
			$sum_keywords = $this->model->get_total_sum();
			$all_keywords = $this->model->get_all_keywords();
			$result = array();
		
			$lec_val = 0.5;
			
			// Get Lecturers
			$lecturers = mysql_query("SELECT * FROM lecturers");
			$rows = array();
			while ($row = mysql_fetch_array($lecturers)) {
				$rows[] = $row;
			}
			foreach($rows as $index => $row){
				// Setup result array
				$result[$index]['id'] = $row['id'];
				$result[$index]['name'] = $row['name'];
				$result[$index]['nidn'] = $row['nidn'];
				$result[$index]['department'] = $row['department'];
				$result[$index]['key_col_name'] = $row['key_col_name'];

				foreach ($all_keywords as $keyword) {
					if (strpos($text, $keyword['text']) !== false){
						$lec_val *= ($keyword[$row['key_col_name']] + 1) / $sum_keywords['total'];
					}
				}

				$result[$index]['value'] = $lec_val;
			}

			return $result;
		}
	}
?>
