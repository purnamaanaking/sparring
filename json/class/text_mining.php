<?php

	class Text_mining{
		
		function __construct(){
			include('text_model.php');
			$model = new Text_model();
		}
		
		private $model;
		
		function do_sentiment($text){
			
			$positive = $this->model->get_row_by_sentiment('positive');
			$positive_val = 0;
			foreach($positive as $key=>$val){
				
			}
			
			$negative = $this->model->get_row_by_sentiment('negative');
			$negative_val = 0;
			
		}
		
	}
	
?>
