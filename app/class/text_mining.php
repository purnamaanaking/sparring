<?php
	class Text_mining{
		function __construct() {
			require_once('text_model.php');
			$this->model = new Text_model();
		}
		
		private $model;
		
		function get_result($text) {
			$all_keywords = $this->model->get_all_keywords();
			$result = array();
			
			// Get Lecturers
			$lecturers = mysql_query("SELECT * FROM lecturers");
			$rows = array();
			while ($row = mysql_fetch_array($lecturers)) {
				$rows[] = $row;
			}
			foreach($rows as $index => $row){
				$lec_val = 0;

				// Setup result array
				$result[$index]['id'] = $row['id'];
				$result[$index]['name'] = $row['name'];
				$result[$index]['nidn'] = $row['nidn'];
				$result[$index]['department'] = $row['department'];
				$result[$index]['key_col_name'] = $row['key_col_name'];

				// Get Total Keyword by Key Col Name
				$sum_keywords = $this->model->get_total_sum($row['key_col_name']);

				foreach ($all_keywords as $keyword) {
					if (strpos($text, $keyword['text']) !== false){
						$lec_val += $keyword[$row['key_col_name']] / $sum_keywords;
					}
				}

				if ($lec_val != 0) {
					$p_val = $lec_val + 1;
					$new_score = 1 / (1 + exp(-$p_val)) * 100;
					$result[$index]['value'] = round($new_score, 2);
				} else {
					$result[$index]['value'] = 0;
				}
			}

			return $result;
		}
	}
?>
