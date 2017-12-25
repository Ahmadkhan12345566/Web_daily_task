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
                <div class="col-xs-3 col-lg-3"><b>Grade</b></div>
                <div class="col-xs-3 col-lg-3"><b>Semester</b></div><br>
            </div>
        <?php
        session_start();
        $id= $_SESSION['reg_id'];
        echo $id;
        $query = "SELECT * from coursdetails
              Where s_id='$id'";
        include 'db_connect.php';
        $db_conn = new db_connection();
        $result = $db_conn->getData($query);
        if( mysqli_num_rows($result) > 0 )
        {
            while( $row = mysqli_fetch_assoc($result) ) {

                $title = $row['title'];
                $grade = $row['grade'];
                $semester=$row['semester'];
                ?>
            <div class="row" style="margin-top: 5px">
                <div class="col-xs-3 col-lg-3"><?php echo $title?> </div>
                <div class="col-xs-3 col-lg-3"><?php echo $grade?></div>
                <div class="col-xs-3 col-lg-3"><?php echo $semester?><br></div>
        </div>

        <?php } }?>
        </div>
    </div>
</div>
</body>

</html>
