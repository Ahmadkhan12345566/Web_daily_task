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

        <h3>Your Bookings</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-lg-6">Id</div>
                <div class="col-xs-6 col-lg-6">Tables</div><br>
            </div>
        <?php
        session_start();
        $id= $_SESSION['user_id'];
        $query = "SELECT * from bookedtabeleinfo
              Where user_id='$id'";
        include 'db_connect.php';
        $db_conn = new db_connection();
        $result = $db_conn->getData($query);
        if( mysqli_num_rows($result) > 0 )
        {
            while( $row = mysqli_fetch_assoc($result) ) {
                $idd = $row['user_id'];
                $tab = $row['tables'];
                ?>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6"><?php echo $idd?><br> </div>
                <div class="col-xs-6 col-lg-6"><?php echo $tab?><br></div>
            </div>

        <?php } }?>
        </div>
    </div>
</div>
</body>

</html>
