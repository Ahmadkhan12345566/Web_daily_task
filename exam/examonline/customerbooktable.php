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
    <?php include("hearder.php");?>
    <div class="container">

        <h3>Your Bookings</h3>
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-lg-3"><b>Course Code</b></div>
                <div class="col-xs-3 col-lg-3"><b>Date</b></div>
                <div class="col-xs-3 col-lg-3"><b>Room</b></div><br>
            </div>
            <?php
            session_start();
            $id= $_SESSION['reg_id'];
            echo $id;
            $query = "SELECT * from admitcards
              Where regno='$id'";
            include 'db_connect.php';
            $db_conn = new db_connection();
            $result = $db_conn->getData($query);
            if( mysqli_num_rows($result) > 0 )
            {
                while( $row = mysqli_fetch_assoc($result) ) {
                 //   id`, `regno`, `title`, `date`, `room
                    $title = $row['title'];
                    $date = $row['date'];
                    $room=$row['room'];
                    ?>
                    <div class="row" style="margin-top: 5px">
                        <div class="col-xs-3 col-lg-3"><?php echo $title?> </div>
                        <div class="col-xs-3 col-lg-3"><?php echo $date ?></div>
                        <div class="col-xs-3 col-lg-3"><?php echo $room?><br></div>
                    </div>

                <?php } }?>
        </div>
    </div>
</div>
</body>

</html>
