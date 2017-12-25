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
    <?php include("customernavbar.php");?>
    <div class="container">
        <?php
        session_start();
        $id= $_SESSION['user_id'];
        $query = "SELECT * from custumerinfo
              Where id='$id'";
        include 'db_connect.php';
        $db_conn = new db_connection();
        $result = $db_conn->getData($query);
        if( mysqli_num_rows($result) > 0 )
        {
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $number = $row['number'];
            $address = $row['address'];
            $emial = $row['email'];
            $password = $row['password'];
        }
        ?>
        <h3>Your Info</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-lg-6">  Name: </div>
                <div class="col-xs-6 col-lg-6"><?php echo $name?></div><br>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6">Contact No: </div>
                <div class="col-xs-6 col-lg-6"><?php echo $number?><br></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6">Address: </div>
                <div class="col-xs-6 col-lg-6"><?php echo $address?><br></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6">Email Id: </div>
                <div class="col-xs-6 col-lg-6"><?php echo $emial?><br></div>
            </div>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6">Password: </div>
                <div class="col-xs-6 col-lg-6"><?php echo $password?><br></div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
