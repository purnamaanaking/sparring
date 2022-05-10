<?php
	include('class/db/config.php');
	include('class/text_mining.php');

	// Get Department
	$departments_query = mysql_query("SELECT * FROM departments");
	$departments = array();
	while ($row = mysql_fetch_array($departments_query)) {
		$departments[] = $row;
	}

	// Get All Data Result
	$text_mining = new Text_mining();
	$all_data_result = $text_mining->get_result('sparring');

	// Get Result By Department
	$by_department_result = array();
	foreach($departments as $department) {
		$by_department_result[$department['code']] = $text_mining->get_result('sparring', $department['code']);
	}

	include('views/researcher_list_view.php');
?>
