<?php

  //session_start();


  if( isset( $_POST['submit'] ) )
  {
    $my_email = $_POST['myEmail'];
    $my_password = $_POST['myPassword'];

    $query = "SELECT * from signupdata
              Where email='$my_email'
              and password='$my_password' ";

    include 'db_connect.php';

    $db_conn = new db_connection();

    $result = $db_conn->getData($query);
//var_dump( $result);
    if( mysqli_num_rows($result) > 0 )
    {
      $row = mysqli_fetch_assoc($result);

     // $_SESSION['user_id'] = $row['id'];

      //var_dump( $result);
      // goto next page
      // redirect to other page
      header("Location: ./index.php");

    }
    else
    {
      // show error msg..
      echo ' <script> alert("Email or password is incorrect.");  </script> ';
    }



  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin </title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="post" >
        <h2 class="form-signin-heading">Please sign in</h2>

        <label for="inputEmail" class="sr-only">Email address</label>

        <input type="email" id="inputEmail" name="myEmail" class="form-control"  placeholder="Email address" >

        <label for="inputPassword" class="sr-only">Password</label>

        <input type="password" id="inputPassword" name="myPassword" class="form-control" placeholder="Password" pattern="^[a-z\d\.]{5,}$" title="Six or more characters">

        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >Sign in</button>

          <a href="inde.php" style="margin: 30px"><button class="btn btn-lg btn-primary btn-block" >Sign Up</button></a>

      </form>

    </div> <!-- /container -->
  </body>
</html>
