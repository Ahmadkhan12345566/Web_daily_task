<?php
session_start();
include 'db_connect.php';
$db_conn = new db_connection();
if( isset( $_POST['requst']) )
{

    $id = $_SESSION['user_id'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $tables = $_POST['table'];
    $qurey="INSERT INTO `bookedtabeleinfo` (user_id,date,tables) 
    VALUES('$id',$date,'$tables')";
    $result = $db_conn->getData($qurey);
    echo $date;
    //header("Location: customerlogin.php");
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
    <?php include("customernavbar.php");?>
    <div class="container">
        <?php
        $id= $_SESSION['user_id'];
        $query = "SELECT * from custumerinfo
              Where id='$id'";
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
        <h3>Place Your Order</h3>
        <div class="container">
            <form method="post">
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
                    <div class="col-xs-6 col-lg-6">Date: </div>
                    <div class="col-xs-6 col-lg-6"><input type="date" name="date"><br></div>
                </div>
                <div class="row" style="margin-top: 5px">
                    <div class="col-xs-6 col-lg-6">Number of Table's: </div>
                    <div class="col-xs-6 col-lg-6"><input type="text" name="table"  ><br></div>
                </div>
                <input type="submit" value="Requst" name="requst" class="btn-primary btn">
            </form>
        </div>
    </div>
</div>
</body>

</html>
