<?php
	$formAction = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';

	if (isset($_POST['submit'])) {
		if ($_POST['keyword'] != null) {
			include('class/db/config.php');
			include('class/text_mining.php');
			
			// Get Keyword
			$search_keywords = $_POST['keyword'];

			// Get Result
			$text_mining = new Text_mining();
			$results = $text_mining->get_result($search_keywords);

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
