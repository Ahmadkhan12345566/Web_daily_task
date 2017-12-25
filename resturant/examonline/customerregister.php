<?php
include 'db_connect.php';
$db_conn = new db_connection();
session_start();
if( isset( $_POST['register'] ) )
{
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $emial = $_POST['email'];
    $password = $_POST['password'];
    $qurey="INSERT INTO `custumerinfo` (name,number,address,email,password) 
    VALUES('$name','$number','$address','$emial','$password')";
    $result = $db_conn->getData($qurey);
    header("Location: customerlogin.php");
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
                    <div class="col-xs-6 col-lg-6">  Name: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="name" ></div><br>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Contact No: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="number"  ><br></div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Address: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="address"  ><br></div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Email Id: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="email"  ><br></div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Password: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="password"  ><br></div>
                </div>
                <input type="submit" value="Register" name="register" class="btn-primary btn">
            </form>
        </div>
</div>
</body>

</html>
