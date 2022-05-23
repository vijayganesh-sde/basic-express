<?php
  require 'connect.php';       
  if (isset($_POST['reg_sub'])){
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $repass=$_POST['repass'];
      if (($pass!=$repass) and ($email!=null)){
        echo "<script> alert('Passwords did not match') </script>";
      }
      else{
        $query="INSERT into register VALUES('$email','$pass')";
        mysqli_query($conn, $query);
        echo "<script> alert('Data added Successfully') </script>";
        header("location:/profile.php");
      }
  }
?>
<html>
  <body>
  <div class="top">
    <a class="tit" href="/">UG-1 HOSTEL ALLOTMENT FORM</a>
  </div>
  <div class="form">
    <form action="" method="post">
      Email ID*<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="email" placeholder="Your WebmailID..." required /><br /><br />
      Password*<br /><input type="password" style="width:300px;height:25px;background-color:#000;color:#808080" name="pass" placeholder="Your Password..." required /><br /><br />
      Re-Enter Password<br /><input type="password" style="width:300px;height:25px;background-color:#000;color:#808080" name="repass" placeholder="Your Password..." required /><br /><br />
      <button type="submit" name="reg_sub">Register</button>
    </form></div>
  </body>
  <style>
    .form{
      margin-left:30%;
      height:1000px;
      color:#fff;
    }
    .top{
      background-color: #404040;
      text-align: left;
      padding-top:20px;
      padding-left:20px;
      height:50px;
    }
    .tit{
      color:#fff;
      text-decoration:none;
    }
  </style>
</html>