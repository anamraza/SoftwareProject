<?php
	include("connect.php");

	$name = $_GET['studentName'];
// 'Caterina Roberts'
	// $error = $name;
	$level = $_GET['level'];
	// add A to level
	$result = mysql_query("SELECT courseNumber , courseName, grade , aLevel
							from studentStats WHERE studentName = '$name' AND aLevel = 'A$level' ");
	$rows = array();

	while($r = mysql_fetch_array($result)) {
	    array_push($rows, $r);
	}

	header('Content-type: application/json');
	echo json_encode($rows); 
?>