<?php
$dbhost = 'localhost';
$dbname = 'sproject';
$username = 'root';
$pass = 'root';

$db = mysql_connect($dbhost,$username,$pass)
or die('<div align="center">Warning: Could not connect to the database</div>');
if (!$db) {
    printf("Error: %s\n", mysqli_error($db));
    exit();
}
mysql_select_db($dbname);
?>