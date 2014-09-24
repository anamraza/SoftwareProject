<?php

// Connect to the MySQL database
include("connect.php");

$sql = "SELECT courseName, courseCode FROM course";

$result = mysql_query($sql);

$rows = array();
while($r = mysql_fetch_array($result)) {
	    array_push($rows, $r);
    }

// CLOSE CONNECTION
	header('Content-type: application/json');
	echo json_encode($rows); 
?>