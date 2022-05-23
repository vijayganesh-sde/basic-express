<?php
  require 'connect.php';  
  require 'connector.php';     
  if (isset($_POST['reg_log'])){
      $email=$_POST['email'];
      $pass=$_POST['pass'];
      $ind=key($mail_arr);
      while($ind<count($mail_arr)){
        if ($mail_arr[$ind]==$email){
            $log_mail=$email;
            break;
        }
        $ind+=1;
      }
      if (!$log_mail){
          echo "<script>alert('This account does not exist')</script>";
      }
      else{
        if($pass==$pass_arr[$ind]){
            $del_quer="DELETE FROM `register` WHERE Webmail='$log_mail'"; 
            mysqli_query($conn, $del_quer);           
            $query="INSERT into register VALUES('$log_mail', '$pass')";
            mysqli_query($conn, $query);
            header('Location:/profile.php');
        }
        else{
            echo "<script>alert('Password is incorrect!!')</script>";
        } 
      }
  }
?>
<html>
  <body>
  <div class="top">
    <a class="tit" href="/">UG-1 HOSTEL ALLOTMENT FORM<a>
  </div>
  <div class="form">
    <form action="" method="post">
      Email ID<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="email" placeholder="Your WebmailID..." required /><br /><br />
      Password<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="pass" placeholder="Your Password..." required /><br /><br />
      <button type="submit" name="reg_log">Login</button>
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