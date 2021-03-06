var form = document.getElementById('registration');
form.addEventlistener('submit', function() {
  return check();
});

function check(){
  var pass1 = document.getElementById('password').value;
  var pass2 = document.getElementById('re-password').value;
  var email = document.getElementById('email').value;
  return (checkPasswordsMatch(pass1, pass2) && checkEmailFormat(email);
}

function checkPasswordsMatch (pass1, pass2) {
  //returns boolean
  return (pass1 === pass2);
}

function checkEmailFormat(email) {
  var regex = /.*@.*\..*/;
  //returns boolean
  return (regex.test(email));
}
