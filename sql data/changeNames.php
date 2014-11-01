<?php

include("connect.php");
require_once __DIR__.'/Faker-master/Faker-master/src/autoload.php';

// use to get real random name to make sample data look better
// theres an error when updating many rows

$faker = Faker\Factory::create();
//return a number of all the unique names in the table

//SELECT DISTINCT student_no from student LIMIT 715, 1000
$result = mysqli_query($db, "SELECT DISTINCT student_no from student");



while ($row = mysqli_fetch_array($result)) {
	$studentNum = $row['student_no'];

	$firstN = $faker->firstName;
	$lastN = $faker->lastName;
	
	$firstN = mysqli_real_escape_string($db, $firstN);
	$lastN = mysqli_real_escape_string($db, $lastN);
	$sql = "UPDATE student
		SET student_name='$firstN $lastN', 
		student_first_name=' $firstN', 
		student_last_name='$lastN'
		WHERE student_no = $studentNum";
	
	

	$retval = mysqli_query($db, $sql);
	//echo $firstN ."</br>";
	if(! $retval )
	{
	  die('Could not update data: ' . mysqli_error($db).' '. $studentNum);
	}

}

echo "done";

mysqli_close($db);
?>
