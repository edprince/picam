
window.addEventListener('load', function() {
  var form = document.getElementById('registration');
  form.addEventListener('submit', function() {
    return check();
  });
});

function check(){
  console.log("check running");
  var pass1 = document.getElementById('password').value;
  var pass2 = document.getElementById('re-password').value;
  var email = document.getElementById('email').value;
  return checkPasswordsMatch(pass1, pass2) && checkEmailFormat(email);
}

function checkPasswordsMatch (pass1, pass2) {
  console.log("Password match running");
  //returns boolean
  //return (!pass1 === pass2);
  return false;
}

function checkEmailFormat(email) {
  console.log("Email match running");
  var regex = /.*@.*\..*/;
  //returns boolean
  return (regex.test(email));
}
