<?php
	$formAction = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '';

	if (isset($_POST['submit'])) {
		if ($_POST['keyword'] != null) {
			include('class/db/config.php');
			include('class/text_mining.php');
			
			// Get Keyword
			$search_keywords = $_POST['keyword'];

			// Get Department
			$departments_query = mysql_query("SELECT * FROM departments");
			$departments = array();
			while ($row = mysql_fetch_array($departments_query)) {
				$departments[] = $row;
			}

			// Get All Data Result
			$text_mining = new Text_mining();
			$all_data_result = $text_mining->get_result($search_keywords);

			// Get Result By Department
			$by_department_result = array();
			foreach($departments as $department) {
				$by_department_result[$department['code']] = $text_mining->get_result($search_keywords, $department['code']);
			}

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
