
 <?php 
     session_start();
     require "dbconfig.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/act.css">
    <link rel="stylesheet" href="css/apis.css">
    <title>Techconsult</title>
</head>

<body>

        
<!--<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="regiration_form" novalidate action="action.php"  method="post" style="margin:auto; width:500px;">
  <fieldset>
    <h2>Step 1: Create your account</h2>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <input type="button" name="password" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2> Step 2: Add Personnel Details</h2>
    <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fName" id="fName" placeholder="First Name">
    </div>
    <div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name">
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="button" name="next" class="next btn btn-info" value="Next" />
  </fieldset>
  <fieldset>
    <h2>Step 3: Contact Information</h2>
    <div class="form-group">
    <label for="mob">Mobile Number</label>
    <input type="text" class="form-control" id="mob" placeholder="Mobile Number">
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
  </fieldset>
  </form>-->

         <!-- ///// second form below///    
  multistep form 
<div class="container">
<form id="regForm" action="" class="form-group" style="width:400px;">
<div class="form-group">

<h1 class="text text-success">Register:</h1>


<div class="tab">Name:
  <p><input placeholder="First name..." oninput="this.className = ''" class="form-control" autofocus></p>
  <p><input placeholder="Last name..." oninput="this.className = ''" class="form-control"></p>
</div>

<div class="tab">Contact Info:
  <p><input placeholder="E-mail..." oninput="this.className = ''" class="form-control"></p>
  <p><input placeholder="Phone..." oninput="this.className = ''" class="form-control"></p>
</div>

<div class="tab">Birthday:
  <p><input placeholder="dd" oninput="this.className = ''" class="form-control"></p>
  <p><input placeholder="mm" oninput="this.className = ''" class="form-control"></p>
  <p><input placeholder="yyyy" oninput="this.className = ''" class="form-control"></p>
</div>

<div class="tab">Login Info:
  <p><input placeholder="Username..." oninput="this.className = ''" class="form-control"></p>
  <p><input placeholder="Password..." oninput="this.className = ''" class="form-control"></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" class="btn btn-primary" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" class="btn btn-primary" onclick="nextPrev(1)">Next</button>
  </div>
</div>


<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
</div>
</form>
</div>-->
        
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
  <form id="regiration_form" action="registerpro.php" class="regform"  method="post" style="margin:auto; width:500px;">
              <ul>
                    <li id="active1">Create your account</li>
                    <li id="active2">Add Personnel Details</li>
                    <li id="active3">Contact Information</li>
              </ul>
               
      <fieldset id="first" >
    <h2> Step 2: Add Personnel Details</h2>
    <div class="form-group">
    <label for="fName">First Name</label>
    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
    </div>
    <div class="form-group">
    <label for="lName">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
    </div>
    <input type="button" name="submit" class="next btn btn-info"id="next" value="Next" onclick="next_step1();">
  </fieldset>

  <fieldset id="second">
    <h2>Step 1: Create your account</h2>
    <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <input type="button" name="previous" class="previous btn btn-default" value="Previous" onclick="prev_step1();">
    <input type="button" name="next" class="next btn btn-info" value="Next" onclick="next_step2();  ">
  </fieldset >

  <fieldset id="third" >
    <h2>Step 3: Contact Information</h2>
    <div class="form-group">
    <label for="mob">Mobile Number</label>
    <input type="text" class="form-control" id="mob" name="mob" placeholder="Mobile Number">
    </div>
    <div class="form-group">
    <label for="address">Address</label>
    <textarea  class="form-control" id="address" name="message" placeholder="Type your message Here"></textarea>
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