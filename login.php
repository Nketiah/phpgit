 <?php
  session_start();
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
    
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px;">
                <div class="card-header text-center">Login Here!</div>

                <div class="card-body">
                    <form method="POST" action="loginpro.php">
                      

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right"></label>

                            <div class="col-md-6"><!-- for increasing the width of textboxes-->
                                <input id="email" type="email" class="form-control" name="email" value="" placeholder="Email" required autofocus>

                                    <!--<span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>-->
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                               
                                   <!-- <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>-->
                              
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                         Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" name="submit" class="btn btn-primary"> Login  </button>
                                <a class="btn btn-link" href="#">Forgot Your Password?</a> 
                                   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
  </div>
  </div>
     
     <script type="text/javascript" src="js/logg.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
</html>