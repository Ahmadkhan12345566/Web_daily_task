<?php
	
	class db_connection
	{
		private $hostname;
		private $username;
		private $password;
		private $db_name;

		private $link;

		
		private function connect()
		{
			$this->link = new mysqli($this->hostname, $this->username, $this->password, $this->db_name);

			if($this->link->connect_error)
			{
				die("Connection failed : " . $this->link->connect_error);
			}
			else
			{
				//echo "Connection established<br>";
			}
		} // end of function

		public function __construct()
		{
			$this->hostname = "localhost";
			$this->username = "root";
			$this->password = "";
			$this->db_name = "sir_class_code";

			$this->connect();

		} // end of constrcutor

		public function insertData($qry)
		{
			$res = $this->link->query($qry);
			if($res == TRUE)
			{
				echo "Data Inserted Successfully <br>";
			}
			else
			{
				echo "Data Insertion failed" . $this->link->error;
			}

		}

		public function getData($qry)
		{
			$res = $this->link->query($qry);
			if(!$res)
			{
				echo "Data cannot be retreived. <br>";
			}
			return $res;
		} // end of getData 




	} // end of class db_connection

?>