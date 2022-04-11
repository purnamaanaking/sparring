<?php
	$formAction = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';

	if (isset($_POST['submit'])) {
		if ($_POST['keyword'] != null) {
			include('class/db/config.php');
			include('class/text_mining.php');
			
			// Get Keyword
			$keyword = $_POST['keyword'];

			// Get Sentiment Result
			$textMining = new Text_mining();
			$results = $textMining->get_sentiment_result($keyword);

			// Setup Result View
			include('views/result_view.php');
		} else {
			// Show Error View
			include('views/error_view.php');
		}
	} else {
		// Setup Input Form
		include('views/main_view.php');
	}
?>
