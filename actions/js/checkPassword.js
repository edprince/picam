var symbols = ['!', '£', '$', '%', '^', '&', '*', '(', ')'];
var password = document.getElementById('password');
var retype = document.getElementById('retype');
var matching;

function checkPasswordsMatch (pass1, pass2) {
  if (pass1 !== pass2) {
    alert("The passwords do not match");
    matching = false;
  } else {
    matching = true;
  }
}

function checkSymbols(pass) {
  for (var i = 0; i < pass.length + 1; i++) {
    
}

checkPasswordMatch(password, retype);

if (matching === true) {

}

