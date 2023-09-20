<?php
    session_start();
    $adver_id = $_GET['adver_id'];


    $con = mysqli_connect("localhost", "root", "", "recycle-management");
    $result = mysqli_query($con, "DELETE FROM adver WHERE adver_id = '$adver_id'");
  if ($result) {
      mysqli_close($con);
      header("location: ../myadvertise.php");
      exit();
  } else {
      echo "Error deleting record";
  }

 
  ?>
 