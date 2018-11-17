
<?php
     require "dbconfig.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Techconsult</title>
</head>
<body>
          <?php
       $obj = new config();
        $obj->getconnection();
       ?>
     <div class="container">
             <h3>Everything is going to be ok!</h3>
     </div>

     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
</html>