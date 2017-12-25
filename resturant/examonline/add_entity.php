<?php
  include 'db_connect.php';
  include 'courses.php';
  include 'Common_code.php';
  $ck_lg=new Common_code();
 // $ck_lg->loginn();
  $db_conn = new db_connection();


if(isset($_POST['button_save']))
{
  $nw_cours=new course();
  $nw_cours->crs_code=$_POST["course_code"];
  $nw_cours->crs_title= $_POST["course_tilte"];
  $nw_cours->crs_chr=$_POST["course_crd_hours"];
  $nw_cours->crs_semseter=$_POST["course_semester"];

  $qurey="INSERT INTO `reg_coursees` (course_code,course_title,crhrs,semester_number) VALUES('$nw_cours->crs_code','$nw_cours->crs_title','$nw_cours->crs_chr', $nw_cours->crs_semseter)";
  $result = $db_conn->getData($qurey);



  header("Location: home1.php");


}



 ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style>
     *{
       margin: 0px;
     }
     table{
        margin-top: 20px;
        width: 450px;

     }
    th{
      padding: 3px;
      height: 35px;
      width: 170px;
    }
    td{
      padding: 3px;
    }
    input{
      width: 270px;
    }

    </style>
  </head>
  <body>
    <section class="container">
      <h2>Course Details:</h2>
    <form class="" method="post">
      <table border="1px solid black">
        <tr>
          <th><label for="course_code">Course Code</label></th>
          <td><input type="text" name="course_code" pattern="^[A-Za-z0-9_]{1,15}$" required autofocus></td>
        </tr>
        <tr>
          <th><label for="">Course Title </label></th>
        <td><input type="text" name="course_tilte" pattern="[a-zA-Z]+" required autofocus></td>
        </tr>
        <tr>
          <th><label for="">Course Crd Hours</label></th>
           <td><input type="text" name="course_crd_hours"   pattern="[0-9]+" title="only accept numbers"   title="rule voilete" required autofocus></td>
        </tr>
        <tr>
          <th><label for="">Course Semester</label></th>
            <td><input type="text" name="course_semester"pattern="[0-9]+" title="only accept numbers" required autofocus></td>
        </tr>
      </table>


     <button type="submit" name="button_save">Save</button>

    </form>
    </section>
  </body>
</html>
