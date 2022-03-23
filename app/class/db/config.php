<?php
	require "mysql_mysqli.inc.php";
	
	$hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'sparring';
	
	$con = mysql_connect($hostname,$username,$password) or die("Unable to connect to MySQL");
	// echo "Connected to MySQL<br>";
	$selected = mysql_select_db($dbname, $con) or die("Could not select examples");
	// echo "Connected to MySQL<br>";
?>
