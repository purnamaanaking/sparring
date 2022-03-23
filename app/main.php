<?php
	if (isset($_POST['submit'])) {
		if ($_POST['keyword'] != null) {
			include('class/db/config.php');
			include('class/text_mining.php');
			
			// Get Keyword
			$keyword = $_POST['keyword'];

			// Get Sentiment Result
			$textMining = new Text_mining();
			$sentimentResult = $textMining->get_sentiment_result($keyword);
			
			// Setup Result Array
			$result['text'] = $keyword;
			$result['sentiment'] = $sentimentResult['sentiment'];

			// Setup Result View
			include('views/result_view.php');
		} else {
			echo '<h1>Kata Kunci Tidak Boleh Kosong</h1>';
		}
	} else {
		// Setup Input Form
		$formAction = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';
		include('views/main_view.php');
	}
?>