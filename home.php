<?php
       session_start();
       require 'dbconfig.php';
       require 'control.php';
       if(isset($_SESSION['user_id'])){
        //$app = new logic();
      
          
        echo '<h6 class="text text-center text text-success ">You are Logged In, Welcome - '.$_SESSION['user_id'].'</h6>';
          
       }
       else{
        header("Location: index.php");
       }
?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="css/bootstrap.min.css">
           <link rel="stylesheet" href="fonts/font-awesome.min.css">
           <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
          <!-- https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css-->
           
           <title>Techconsult</title>
       </head>
       <body>
            
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php  echo $_SESSION['user_id'] ?></a>
        <a   href="#">Profile</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      
        </a>
       
                      
                       
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         
        </div>
      </li>
      
      </ul>
    
  </div>
</nav><br><br>
              <div class="container">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur deserunt dolore fuga labore magni maxime, quaerat reiciendis tenetur? Accusantium blanditiis doloribus earum error inventore laudantium nesciunt quis reprehenderit ullam vel?
                    </p>
                    <a href="logout.php" class="btn btn-primary" >Logout</a>
                    <button type="submit" class="btn btn-primary btn-sm"> <i class="fa fa-trash-o"></i></button>
                   
                </div>
            </div>
            </div>

            <script type="text/javascript" src="js/popper.min.js"></script>
            <script type="text/javascript" src="js/joe.js"></script>
            <script type="text/javascript" src="js/jquery.easing.min.js"></script>
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
       </body>
       </html>
