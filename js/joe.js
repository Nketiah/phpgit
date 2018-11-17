function next_step1() {
  document.getElementById("first").style.display = "none";
  document.getElementById("second").style.display = "block";
  document.getElementById("active2").style.color = "red";
}

function prev_step1() {
  document.getElementById("first").style.display = "block";
  document.getElementById("second").style.display = "none";
  document.getElementById("active1").style.color = "red";
  document.getElementById("active2").style.color = "gray";
}
function next_step2() {
  document.getElementById("second").style.display = "none";
  document.getElementById("third").style.display = "block";
  document.getElementById("active3").style.color = "red";
}
function prev_step2() {
  document.getElementById("third").style.display = "none";
  document.getElementById("second").style.display = "block";
  document.getElementById("active2").style.color = "red";
  document.getElementById("active3").style.color = "gray";
}
