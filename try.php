

   <?php
          $person = [ 
              'joe' =>'good',
              'Nketia' =>'ok',
              'kwame' =>'hmm',
              'jgyataba' =>'awesome',
          ];
          foreach($person as $human =>$value){
                echo $human.''.$value.'<br>';
          }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/try.css">-->
    <title>Document</title>
    <style>
form#multiphase{ border:#000 1px solid; padding:24px; width:350px; }
form#multiphase > #phase2, #phase3, #show_all_data{ display:none; }
</style>
</head>
<body>
    
 <!--<div class="content">
  Multistep Form
<div class="main">
<form action="#" class="regform" method="get">
  Progressbar 
<ul id="progressbar">
<li id="active1">Create Account</li>
<li id="active2">Educational Profiles</li>
<li id="active3">Personal Details</li>
</ul>
  Fieldsets 
<fieldset id="first">
<h2 class="title">Create your account</h2>
<p class="subtitle">Step 1</p><input class="text_field" name="email" placeholder="Email" type="text" value="">
<input class="text_field" name="pass" placeholder="Password" type="password" value="">
<input class="text_field" name="cpass" placeholder="Confirm Password" type="password" value="">
<input id="next_btn1" onclick="next_step1()" type="button" value="Next">
</fieldset>
<fieldset id="second">
<h2 class="title">Educational Profiles</h2>
<p class="subtitle">Step 2</p>
<select class="options">
<option>--Select Education--</option>
<option>Post Graduate</option>
<option>Graduate</option>
<option>HSC</option>
<option>SSC</option>
</select>
<input class="text_field" name="marks" placeholder="Marks Obtained" type="text" value="">
<input class="text_field" name="pyear" placeholder="Passing Year" type="text" value="">
<input class="text_field" name="univ" placeholder="University" type="text">
<input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
<input id="next_btn2" name="next" onclick="next_step2()" type="button" value="Next">
</fieldset>
<fieldset id="third">
<h2 class="title">Personal Details</h2>
<p class="subtitle">Step 3</p>
<input class="text_field" name="fname" placeholder="First Name" type="text">
<input class="text_field" name="lname" placeholder="Last Name" type="text">
<input class="text_field" name="cont" placeholder="Contact" type="text">
<label>Gender</label>
<input name="gender" type="radio" value="Male">Male
<input name="gender" type="radio" value="Female">Female
<textarea name="address" placeholder="Address">
</textarea>
<input id="pre_btn2" onclick="prev_step2()" type="button" value="Previous">
<input class="submit_btn" onclick="validation(event)" type="submit" value="Submit">
</fieldset>
</form>
</div>
</div>-->

        <progress id="progressBar" value="0" max="100" style="width:250px;"></progress>
<h3 id="status">Phase 1 of 3</h3>
<form id="multiphase" onsubmit="return false">
  <div id="phase1">
    First Name: <input id="firstname" name="firstname"><br>
    Last Name: <input id="lastname" name="lastname"><br>
    <button onclick="processPhase1()">Continue</button>
  </div>
  <div id="phase2">
    Gender: <select id="gender" name="gender">
      <option value=""></option>
      <option value="m">Male</option>
      <option value="f">Female</option>
    </select><br>
    <button onclick="processPhase2()">Continue</button>
  </div>
  <div id="phase3">
    Country: <select id="country" name="country">
      <option value="United States">United States</option>
      <option value="India">India</option>
      <option value="United Kingdom">United Kingdom</option>
    </select><br>
    <button onclick="processPhase3()">Continue</button>
  </div>
  <div id="show_all_data">
    First Name: <span id="display_fname"></span> <br>
    Last Name: <span id="display_lname"></span> <br>
    Gender: <span id="display_gender"></span> <br>
    Country: <span id="display_country"></span> <br>
    <button onclick="submitForm()">Submit Data</button>
  </div>
</form>


     
     <script type="text/javascript" src="js/logg.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
</body>
</html>