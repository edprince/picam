var regex = /.*@.*\..*/;
var email = document.getElementById('email');
var result = email.match(regex);
if (result !== null) {
  alert("Email Address is in an incorrect format");
}
