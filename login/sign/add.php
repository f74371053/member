<?php
     ini_set("display_errors","On");

     $mail = $_POST['mail'];
     $password = $_POST['password'];

     require_once "../../method/connect.php";

     $insert = $connect -> prepare("INSERT INTO user(mail,password)
       VALUES(?,?)");
     $insert -> execute(array($mail,$password));

    header("location:../?sig_suc=註冊成功");

 ?>
