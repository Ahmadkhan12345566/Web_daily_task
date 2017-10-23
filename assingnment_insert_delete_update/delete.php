<?php

include 'db_connect.php';
include 'Common_code.php';
$ck_lg=new Common_code();
$ck_lg->loginn();
$db_conn = new db_connection();


$id=  $_GET['id'];

if(isset($_POST['button_yes']))
{

  $query="DELETE  FROM `reg_coursees` WHERE id=$id";
  $result = $db_conn->getData($query);



  header("Location: home.php");
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <section class="container">

     <h1>Do you want to delete?</h1>

      <form class=""  method="post">

           <button type="submit" name="button_yes">Yes</button>
          <a href="home.php"> <button type="button" name="button_no">No</button></a>
      </form>
    </section>
  </body>
</html>
