


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Techconsult</title>
</head>
<style >
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>

  
<body>
                 
     <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="regiration_form" action="action.php" class="regform"  method="post" style="margin:auto; width:500px;">
              <ul>
                    <li id="active1">Create your account</li>
                    <li id="active2">Add Personnel Details</li>
                    <li id="active3">Contact Information</li>
              </ul>
  <fieldset id="first">
    <h2>Step 1: Create your account</h2>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <input type="button" name="password" class="next btn btn-info"id="next" value="Next" onclick="next_step1();">
  </fieldset >

  <fieldset id="second" >
    <h2> Step 2: Add Personnel Details</h2>
    <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fName" id="fName" placeholder="First Name">
    </div>
    <div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name">
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" onclick="prev_step1();">
    <input type="button" name="next" class="next btn btn-info" value="Next" onclick="next_step2();  ">
  </fieldset>

  <fieldset id="third" >
    <h2>Step 3: Contact Information</h2>
    <div class="form-group">
    <label for="mob">Mobile Number</label>
    <input type="text" class="form-control" id="mob" placeholder="Mobile Number">
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" onclick="prev_step2();">
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" onclick="validation(event);">
  </fieldset>
  </form>


     <script type="text/javascript" src="js/popper.min.js"></script>
     <script type="text/javascript" src="js/joe.js"></script>
     <script type="text/javascript" src="js/jquery.easing.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
</html>