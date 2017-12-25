<?php
include 'db_connect.php';
include 'courses.php';
include 'Common_code.php';
$ck_lg=new Common_code();
$db_conn = new db_connection();


if(isset($_POST['submitbtn']))
{
    $first_name=$_POST["firstname"];
    $last_name= $_POST["lastname"];
    $email=$_POST["myemail"];
    $password=$_POST["mypassword"];

    $qurey="INSERT INTO `signupdata` (first_name,last_name,email,password) 
    VALUES('$first_name','$last_name','$email', '$password')";
    $result = $db_conn->getData($qurey);
      header("Location: login.php");
}

?>


<!DOCTYPE html>
<html>
	<head>
		<title> Expense maneger </title>

		<link rel="stylesheet" type="text/css" href="./css/mystyle.css">

	</head>
	<body>

		<header></header>
		<section>
			<h1> Registration Form </h1>
			<article> 	
				<form method="post">

					<fieldset>
					<legend> Signup </legend>

					<label class="block-tag">
						<span class="block-tag first-col"> 	First Name: *
						</span>
						<span class="block-tag second-col">
						 <input type="text" name="firstname" required placeholder="Enter first name" > 
						</span>
					</label> 

					<label class="block-tag">
						<span class="block-tag first-col">
						Last Name:
						</span>
						<span class="block-tag second-col">
						 <input type="text" name="lastname" placeholder="Enter last name">
						</span>
					</label>
                        <label class="block-tag">
						<span class="block-tag first-col">
							Email:
						</span>	
						<span class="block-tag second-col">
							<input type="email" name="myemail">
						</span>	
					</label>

					<label class="block-tag">
						<span class="block-tag first-col">
							Password:
						</span>	
						<span class="block-tag second-col">
							<input type="password" name="mypassword">
						</span>	
					</label>

					<label class="block-tag">
						<span class="block-tag first-col">
							<input type="reset" value="Reset">
						</span>	
						<span class="block-tag second-col">
							<input type="submit" value="SignUp" name="submitbtn" >
						</span>	
					</label>
                    </fieldset>

				</form>
			</article>
		</section>
		<footer>
			Copyright &copy; AUIC
		</footer>

	</body>
</html>