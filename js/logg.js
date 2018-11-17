/*------------Validation Function-----------------*/
/*var count = 0; // To count blank fields.
function validation(event) {
  var radio_check = document.getElementsByName("gender"); // Fetching radio button by name.
  var input_field = document.getElementsByClassName("text_field"); // Fetching all inputs with same class name text_field and an html tag textarea.
  var text_area = document.getElementsByTagName("textarea");
  // Validating radio button.
  if (radio_check[0].checked == false && radio_check[1].checked == false) {
    var y = 0;
  } else {
    var y = 1;
  }
  // For loop to count blank inputs.
  for (var i = input_field.length; i > count; i--) {
    if (input_field[i - 1].value == "" || text_area.value == "") {
      count = count + 1;
    } else {
      count = 0;
    }
  }
  if (count != 0 || y == 0) {
    alert("*All Fields are mandatory*"); // Notifying validation
    event.preventDefault();
  } else {
    return true;
  }
}
/*---------------------------------------------------------*/
// Function that executes on click of first next button.
/*function next_step1() {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "block";
  document.getElementById("active2").style.color = "red";
}
// Function that executes on click of first previous button.
function prev_step1() {
  document.getElementById("first").style.display = "block";
  document.getElementById("second").style.display = "none";
  document.getElementById("active1").style.color = "red";
  document.getElementById("active2").style.color = "gray";
}
// Function that executes on click of second next button.
function next_step2() {
  document.getElementById("second").style.display = "none";
  document.getElementById("third").style.display = "block";
  document.getElementById("active3").style.color = "red";
}
// Function that executes on click of second previous button.
function prev_step2() {
  document.getElementById("third").style.display = "none";
  document.getElementById("second").style.display = "block";
  document.getElementById("active2").style.color = "red";
  document.getElementById("active3").style.color = "gray";
}*/
var fname, lname, gender, country;
function _(x) {
  return document.getElementById(x);
}
function processPhase1() {
  fname = _("firstname").value;
  lname = _("lastname").value;
  if (fname.length > 2 && lname.length > 2) {
    _("phase1").style.display = "none";
    _("phase2").style.display = "block";
    _("progressBar").value = 33;
    _("status").innerHTML = "Phase 2 of 3";
  } else {
    alert("Please fill in the fields");
  }
}
function processPhase2() {
  gender = _("gender").value;
  if (gender.length > 0) {
    _("phase2").style.display = "none";
    _("phase3").style.display = "block";
    _("progressBar").value = 66;
    _("status").innerHTML = "Phase 3 of 3";
  } else {
    alert("Please choose your gender");
  }
}
function processPhase3() {
  country = _("country").value;
  if (country.length > 0) {
    _("phase3").style.display = "none";
    _("show_all_data").style.display = "block";
    _("display_fname").innerHTML = fname;
    _("display_lname").innerHTML = lname;
    _("display_gender").innerHTML = gender;
    _("display_country").innerHTML = country;
    _("progressBar").value = 100;
    _("status").innerHTML = "Data Overview";
  } else {
    alert("Please choose your country");
  }
}
function submitForm() {
  _("multiphase").method = "post";
  _("multiphase").action = "my_parser.php";
  _("multiphase").submit();
}
