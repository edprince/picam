window.addEventListener('load', function() {
  var img = document.getElementById('cam');
  var version;
  var id = document.getElementById('id').value;
  console.log(typeof updateVersion);
  setInterval(function() {
    updateVersion(img, version, id);
  }, 5000);
});


function updateVersion(x,v, id) {
  v+=1;
  var n = Math.random().toString();
  console.log("Version incremented" + n);
  x.src = 'assets/images/' + id + '/latest.jpg?v=' + n;
  console.log("source changed");
  console.log("id: " + id);
}

