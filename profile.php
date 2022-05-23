<?php 
  require 'connector.php';
?>
<!DOCTYPE html>
<html>
<body>
  <div class="top">
    <a class="tit" href="/">UG-1 HOSTEL ALLOTMENT FORM<a>
    <div class="dropdown"><a class="prof">Profile</a>
      <div class="dropdown-content">
        <img src="https://discountdoorhardware.ca/wp-content/uploads/2018/06/profile-placeholder-3.jpg" style="height:150px;width:200px" />
        <a class="drop">You are signed in as</a><a class="drop_user"><?php echo $mail_val;?></a>
      </div>
    </div>
  </div><br />
  <div class="form">
    <form action="form_sub.php" method="post">
      Name*<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="name" placeholder="Your Name..." required /><br /><br />
      Roll no*<br /><input type="number" style="width:300px;height:25px;background-color:#000;color:#808080" name="roll" placeholder="Your NITT Roll No..." required /><br /><br />
      gender*(M/F/T)<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="gender" placeholder="Your Gender..." required /><br /><br />
      Webmail ID*<br /><input type="text" style="width:300px;height:25px;background-color:#000;color:#808080" name="webmail" placeholder="Your Webmail..." required /><br /><br />
      Phone number<br /><input type="number" style="width:300px;height:25px;background-color:#000;color:#808080" name="ph" placeholder="Your personal Mobile No..." /><br /><br />
      Your Hostel choice*<br />
        <Select name="hostel_choice" style="width:300px;height:25px;background-color:#000;color:#808080" >
          <option>Choose your hostel..</option>
          <option value="Agate">Agate</option>
          <option value="Coral">Coral</option>
          <option value="Diamond">Diamond</option>
          <option value="Jade">Jade</option>
          <option value="Opal">Opal</option>
        </select><br /><br />
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
<style>
    .top{
      background-color: #404040;
      text-align: left;
      padding-top:20px;
      padding-left:20px;
      height:50px;
      color:#fff;
    }
    body{
      background-color: #101010;
      color:#fff;
    }
    .form{
      margin-left:30%;
      height:1000px;
      color:#fff;
    }
    .reg {
      margin-left:85%;
      position:relative;
      bottom:28%;
      color:white;
      text-decoration:none;
    }
    .drop{
      color:#fff;
      font-size:20px;
      margin-left:20px;
      display:block;
    }
    .drop_user{
      color:#fff;
      font-size:20px;
      padding-right:70%;
      padding-left:30%;
    }
    .prof{
      color:#fff;
    }
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    height:200px;
    color:#fff;
    }
    .dropdown{
      margin-left:85%;
      position:relative;
      bottom:30%;
      color:#fff;
      text-decoration:none;
      display: inline-block;
    }
    .tit{
      color:#fff;
      text-decoration:none;
    }
</style>

</body>
</html>
