<?php
//  session_start();
 include 'Common_code.php';
 $ck_lg=new Common_code();
 $ck_lg->loginn();

//  if(!isset($_SESSION['user_id']))
  //{
    //header("Location: ./login.php");
  //}

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

    <title> Home </title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
    <nav class="container">
      <a href="./logout.php"> Logout </a>
    </nav>

    <h2> Dashboard </h2>

    <section>

      <article>

      <table class="table table-bordered ">
        <tr>
          <th> Code </th>
          <th> Course Title </th>
          <th> Cr.Hrs. </th>
          <th> Semester # </th>
          <th> Action </th>
        </tr>

        <?php

            include 'db_connect.php';

            $db_conn = new db_connection();

            $query = "Select id, course_code,
                             course_title,
                             crhrs,
                             semester_number

                      From reg_coursees";

            $result = $db_conn->getData($query);


            while( $row = mysqli_fetch_assoc($result) )
            {
              ?>
              <tr>
                <td>
                  <?php
                    echo $row['course_code'] ;
                  ?>
                </td>

                <td>
                  <?php
                    echo $row['course_title'] ;
                  ?>
                </td>
                <td>
                  <?php
                    echo $row['crhrs'] ;
                  ?>
                </td>
                <td>
                  <input type="text" name="" value="<?php
                    echo $row['semester_number'] ;
                  ?>">

                </td>

                <td>
                <a href="./edit.php?id=<?php echo $row['id']; ?>"> Edit </a>

                   |
                <form class="" method="post">

                    <?php       //$GLOBALS[$id_d] =$row['id'];


                    ?>
                     <a href="./delete.php?id=<?php echo $id_d=$row['id']; ?>"> Delete </a>
                  <!--- <button type="submit" name="button_delt">delet    </button> --->

                  </form>
                </td>
              </tr>

              <?php
            } // end of while

        ?>




      </table>

      </article>
      <article >
        <a href="add_entity.php">New Entry </a>
      </article>
    </section>

    </div> <!-- /container -->
  </body>
</html>
