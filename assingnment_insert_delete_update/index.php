<!DOCTYPE html>
<html>
	<head>
		<title> Reg. Form </title>

		<link rel="stylesheet" type="text/css" href="./css/mystyle.css">

	</head>
	<body>

		<header></header>
		<section>
			<h1> Registration Form </h1>
			<article> 	
				<form method="post" action="display.php">

					<fieldset>
					<legend> Personal Data </legend>

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
						 <input type="text" name="lastname">
						</span>
					</label>
					
					<label class="block-tag">
						<span class="block-tag first-col">
							Gender: *
						</span>	
						<span class="block-tag second-col">
							<input type="radio" name="gender" value="female" required > Female
					<input type="radio" name="gender" value="male" required > Male 

						</span>	
					</label>

					<label class="block-tag">
						<span class="block-tag first-col">
							Country:
						</span>	
						<span class="block-tag second-col">
						
						<input list="all_countries" name="country" />

						<datalist id="all_countries">

							<option value="Pakistan"> Pakistan

							<option value="China"> China

							<option value="UK"> UK

							<option value="USA"> USA

						</datalist>

						<!--	
						<select name="country">
							
							<option value="none"> None </option>

							<option value="Pakistan"> Pakistan </option>

							<option value="China"> China </option>


						</select>
						-->
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