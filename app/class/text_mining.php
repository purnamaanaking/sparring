<?php
	class Text_mining{
		function __construct() {
			require_once('text_model.php');
			$this->model = new Text_model();
		}
		
		private $model;
		private $category = 2;
		
		function get_sentiment_result($teks) {
			//echo $teks.'<br><br>';echo strpos($teks, 'a');
			
			$sum_keywords = $this->model->get_total_sum();
			$all_keywords = $this->model->get_all_keywords();
			$result = array();
			
			$neg_val = 0.5;
			$pos_val = 0.5;
			
			foreach ($all_keywords as $row) {
				if (strpos($teks, $row['teks']) !== false){
					$neg_val *= ($row['Nscore']+1) / $sum_keywords['total'];
					$pos_val *= ($row['Pscore']+1) / $sum_keywords['total'];
				}
			}
			
			if ($pos_val > $neg_val) $sentiment = 'positive';
			else $sentiment = 'negative';
				
			$result = array(
				'indexpos' => $pos_val,
				'indexneg' => $neg_val,
				'sentiment' => $sentiment
			);
			
			// var_dump($result);
			return $result;
		}
	}
?>
