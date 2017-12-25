<?php
session_start();
class Common_code
{
  public function loginn()
  {
    if(!isset($_SESSION['user_id']))
    {
      header("Location: ./login.php");
    }
  }
  public function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
    public function is_english($str)
  {
      if (strlen($str) != strlen(utf8_decode($str))) {
          return false;
      } else {
          return true;
      }
  }

}

/*
<?php
$hashed_password = crypt('mypassword'); // let the salt be automatically generated

/* You should pass the entire results of crypt() as the salt for comparing a
   password, to avoid problems when different hashing algorithms are used. (As
   it says above, standard DES-based password hashing uses a 2-character salt,
   but MD5-based hashing uses 12.) */
//if (hash_equals($hashed_password, crypt($user_input, $hashed_password))) {
  // echo "Password verified!";
//}
//


 ?>
