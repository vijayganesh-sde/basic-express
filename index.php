<!DOCTYPE html>
<html>
<body>
  <div class="top">
    <a class="tit" href="/">UG-1 HOSTEL ALLOTMENT FORM<a>
    <a class="reg" href="/register.php">Register</a>
    <a class="login" href="/login.php">Login</a>
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
    }
    body{
      background-color: #101010;
      color:#fff;
    }
    .form{
      margin-left:30%;
      height:1000px;
    }
    .reg {
      margin-left:85%;
      position:relative;
      bottom:28%;
      color:white;
      text-decoration:none;
    }
    .login{
      margin-left:92%;
      position:relative;
      bottom:65%;
      color:white;
      text-decoration:none;
    }
    .tit{
      color:#fff;
      text-decoration:none;
    }
</style>

</body>
</html>
