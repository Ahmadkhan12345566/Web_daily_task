<?php
session_start();
if( isset($_POST['register'] ) )
{
    header("Location: customerregister.php");
}
else if( isset( $_POST['login'] ) )
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * from custumerinfo
              Where email='$email'
              and password='$password' ";
    include 'db_connect.php';
    $db_conn = new db_connection();
    $result = $db_conn->getData($query);
    if( mysqli_num_rows($result) > 0 )
    {
        $row = mysqli_fetch_assoc($result);
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['reg_id'] = $row['email'];

        header("Location: custmer.php");
    }
    else
    {
        echo ' <script> alert("Email or password is incorrect.");  </script> ';
    }
}


?>

<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php include("header.php");?>
    <div class="container" style="margin-top: 10px;">
        <div class="col-xs-4 col-lg-4"></div>
        <div class="col-xs-4 col-lg-4">

            <form method="post">
                <div class="row">
                    <div class="col-xs-6 col-lg-6">  Reg No#: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="email" ></div><br>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Password: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="password"  ><br></div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6"> <input type="submit" value="Login" name="login" class="btn-primary btn"></div>
                    </div>
            </form >
        </div>

    </div>
</div>
</body>

</html>
