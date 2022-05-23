<?php
    require 'connect.php';
    $sql = "SELECT * FROM register";
    $result = mysqli_query($conn, $sql);
    $mail_arr=array();
    $pass_arr=array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $mail_val= $row['Webmail'] ;
            array_push($mail_arr,$mail_val);
            $pass_val= $row['Password'];
            array_push($pass_arr,$pass_val);
        }
    }
    
?>