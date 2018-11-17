
<?php
      session_start();
      require "dbconfig.php";
      require "control.php";

      $app = new logic();

      if($_SERVER['REQUEST_METHOD'] == 'POST'){

             $email    =  trim($_POST['email']);
             $password =  trim($_POST['password']);
             $app->Login($email, $password);
                    
                    }
              
                    
                
            
      
?>