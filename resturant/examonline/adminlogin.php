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
                <div class="row"><div class="col-xs-6 col-lg-6" style="color: red;">  In Progress ... </div></div>
                <div class="row">
                <div class="col-xs-6 col-lg-6">  Email: </div>
                <div class="col-xs-6 col-lg-6"><input type="text" name="FirstName" ></div><br>
                 </div>
                <div class="row" style="margin-top: 5px">
                <div class="col-xs-6 col-lg-6">Password: </div>
                <div class="col-xs-6 col-lg-6"><input type="text" name="LastName"  ><br></div>
                </div>
                <input type="submit" value="Login" class="btn-primary btn">
            </form>
        </div>

    </div>
</div>
</body>

</html>
