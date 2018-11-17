<?php
     session_start();
     require "dbconfig.php";
     require "control.php";

      $app = new logic();
      if($_SERVER['REQUEST_METHOD'] =='POST'){

        $user_id = $app->register($_POST['fname'],$_POST['lname'],$_POST['mob'],$_POST['message'],$_POST['email'],$_POST['password']);
        $_SESSION['user_id'] = $user_id;
        header('Location: register.php');
      }
?>