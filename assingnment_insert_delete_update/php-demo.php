<?php
	
	/* 
		echo "Hello Web k logo..."; 
	*/

	# I am also comment


	//int age = 24;  // not in php
/*
	$age = 24;
	//$name = "Fazli Dayan";
	$fname = "Fazli";
	$mname = "Dayan";
	$lname = "Khan";
	$gpa = 3.99;
	$cgpa = 2.66;

	echo "Age " . $age;
	echo "<br>";
	//echo "Name: " . $name;
*/
	//echo "Name : " . $fname . " " . $mname . " " . $lname;
/*
	echo "Name: $fname $mname $lname";

	echo "<br>";
	echo "<br>";

	$age = $age - 5;
	echo "Age : $age" ;

	echo "";

	if($age < 25)
	{
		echo "Choosni le lo";
	}
	else if($age == 25)
	{
		echo "Lolipop le lo";
	}
	else
	{
		echo "Eidi de do...";
	}


	for ($i=0; $i < 10; $i++) { 
		echo "I have learned the PHP <br>";
	}
*/

/*
	function display_greeting($name)
	{
		echo "Hello! $name <br>";
	}

	display_greeting("Hammad");
	display_greeting($fname);
	display_greeting("Hammad");


	$names = array("Hammad", "Arslan");

	$names[2] = "Adil";

	echo "Array contains : <br>";

	for ($j=0; $j < count($names) ; $j++) { 
		echo $names[$j] . "<br>";
	}
	
	// Adil - 03001234567
	// hammad- 03011234567
	// Anwar- 03131234567

	$contact_nos = array("adil" => "03001234567");

	$contact_nos["anwar"] = "03131234567";
	
	echo $contact_nos["adil"];
	*/

	class person
	{
		private $name;
		private $cnic;

		// this is constructor 
		public function __construct()
		{
			$this->name = "Name is missing";
			$this->cnic = "CNIC is missing";
		}

		public function takeInput($name, $cnic)
		{
			$this->name = $name;
			$this->cnic = $cnic;
		}

		public function display()
		{
			echo "My Name is " . $this->name . "<br>";
		}
	} // end of class 


	class student extends person // inheritance 
	{
		private $gpa;

		public function setGPA($gpa)
		{
			$this->gpa = $gpa;
		}

		public function getGPA()
		{
			return $this->gpa;
		}

		public function setName($name)
		{
			$this->name = $name;
		}

		public function getName()
		{
			return $this->name;
		}

		public function studentData($name, $cnic, $gpa)
		{
			$this->name = $name;
			$this->cnic = $cnic;
			$this->gpa = $gpa;
		}

		public function displayStdData()
		{
			echo "I am $this->name, cnic is $this->cnic and my gpa is $this->gpa";
		}

	} // end of class student


	//$pr = new person();

	//$pr->takeInput("Hammad", "123456789");
	//$pr->display();

	$std = new student();

	$std->studentData("Adil", "123-45678-9", 3.88);

	$std->displayStdData();

?>