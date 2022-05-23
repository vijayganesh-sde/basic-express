<?php
  require 'connect.php';       
  if (isset($_POST['submit'])){
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $gen=$_POST['gender'];
      $webmail=$_POST['webmail'];
      $ph=$_POST['ph'];
      $hostel=$_POST['hostel_choice'];
  }
  $query="INSERT into hostel_info VALUES('$name','$roll', '$gen','$webmail','$ph', '$hostel')";
  mysqli_query($conn, $query);
  echo "<script> alert('Data uploaded Successfully') </script>";
?>
Thank You For Your Response✌️