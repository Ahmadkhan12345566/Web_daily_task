<?php
include 'Common_code.php';
include 'courses.php';
include 'db_connect.php';
$ck_lg=new Common_code();
$ck_lg->loginn();
$db_conn = new db_connection();
$id=  $_GET['id'];
$gquery="Select course_code, course_title, crhrs, semester_number From reg_coursees WHERE id=
$id";
$result = $db_conn->getData($gquery);
echo "<pre>";
print_r($result);
$cours_data_rd=new course();


$cours_data_r= mysqli_fetch_assoc($result);

//print_r($cours_data_r);
//echo "</pre>";
$cours_data_rd->crs_code=$cours_data_r['course_code'];
$cours_data_rd->crs_title=$cours_data_r['course_title'];
$cours_data_rd->crs_chr=$cours_data_r['crhrs'];
$cours_data_rd->crs_semseter=$cours_data_r['semester_number'];

//echo $cours_data_r['course_code'];

// = mysqli_fetch_assoc($result)

//  var_dump($cours_data_r);
  if(isset($_POST['button_save']))
  {
    $nw_cours=new course();
    $nw_cours->crs_code= $ck_lg->test_input($_POST["course_code"]);

    /*if(ctype_alnum($nw_cours->crs_code)){
        $nw_cours->crs_code="i m eng";
      }
      else{
          $nw_cours->crs_code="i m not";
      }
*/

    $nw_cours->crs_title= $ck_lg->test_input($_POST["course_tilte"]);
/*    if(ctype_alnum($nw_cours->crs_title)){
        $nw_cours->crs_title="i m eng";
      }
      else{
          $nw_cours->crs_title="i m not";
      }

  */  $nw_cours->crs_chr=$_POST["course_crd_hours"];
    $nw_cours->crs_semseter=$_POST["course_semester"];

//vardump($nw_cours);
     $update_qury="UPDATE `reg_coursees` SET `course_code`='$nw_cours->crs_code',`course_title`= '$nw_cours->crs_title',`crhrs`='$nw_cours->crs_chr',`semester_number`='  $nw_cours->crs_semseter' WHERE id=$id";
  //  $qurey="INSERT INTO `reg_coursees` (course_code,course_title,crhrs,semester_number) VALUES('$nw_cours->crs_code','$nw_cours->crs_title','$nw_cours->crs_chr', $nw_cours->crs_semseter)";
    $result = $db_conn->getData($update_qury);



    header("Location: home.php");


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
    <form class=""  method="post">
      <table border="1px solid black">
        <tr>
          <th><label for="course_code">Course Code</label></th>
          <td><input type="text" name="course_code"  title="requre code (_) number" required autofocus value="<?php
              echo $cours_data_rd->crs_code ;
            ?>   " ></td>
        </tr>
        <tr>
          <th><label for="">Course Title </label></th>
        <td><input type="text" name="course_tilte"  value="<?php
            echo $cours_data_rd->crs_title ;
          ?>"  required autofocus></td>
        </tr>
        <tr>
          <th><label for="">Course Crd Hours</label></th>
           <td><input type="text" name="course_crd_hours" value="<?php
               echo $cours_data_rd->crs_chr ;
             ?>" pattern="[0-9]+" title="only accept numbers"></td>
        </tr>
        <tr>
          <th><label for="">Course Semester</label></th>
            <td><input type="text" name="course_semester" value="<?php
                echo $cours_data_rd->crs_semseter ;
              ?>" pattern="[0-9]+" title="only accept numbers" required autofocus></td>
        </tr>
      </table>


    <button type="submit" name="button_save">Save</button>
    </form>


    </section>
  </body>
</html>
