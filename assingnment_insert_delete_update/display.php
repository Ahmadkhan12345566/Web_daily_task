<?php

	include 'db_connect.php';



	$fname = "";
	$lname = "";
	$gender = "";
	$country = "";
	$email = "";
	$password = "";

	$db = new db_connection();


	if( isset($_POST["submitbtn"]) )
	{
		$fname = 	$_POST["firstname"];
		$lname = 	$_POST["lastname"];
		$gender = 	$_POST["gender"];
		$country = 	$_POST["country"];
		$email = 	$_POST["myemail"];
		$password = $_POST["mypassword"];

		// insert data into db

		$query = "INSERT INTO sign_up (first_name, last_name, gender, country, email, password)
 			VALUES ('$fname', '$lname', 
 					'$gender', '$country',
 				    '$email', '$password')";

 		$db->insertData($query);


	}
	else
	{
		echo "You need to go at Reg. Form...";
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> User's Data </title>
	</head>
	<body>

		<h1>User's Data</h1>

		<p>
			Name: <?php 
					echo "$fname $lname";   
				  ?>
			<br> 
			Gender: <?php 
					echo $gender;   
				  ?>
			<br> 
			Email: <?php 
					echo $email;   
				  ?>
			<br>
			Country: <?php 
					echo $country;   
					  ?> 
		</p>

	</body>
</html>
