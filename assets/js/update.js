window.addEventListener('load', function() {
  var img = document.getElementById('cam');
  setInterval(updateVersion, 10000);
});


var version = 1;
function updateVersion() {
  version+=1;
  img.src = 'assets/images/latest.jpg?v=' + version;
}

