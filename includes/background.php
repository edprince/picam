<?php 
session_start(); 
if (!isset($_SESSION['bg'])) {
  $backgrounds = array('bg1.jpg', 'bg2.jpg', 'bg4.jpg');
  $bg_key = array_rand($backgrounds);
  $bg = $backgrounds[$bg_key];
  $_SESSION['bg'] = $bg;
} else {
  $bg = $_SESSION['bg'];
}
?>

<style type="text/css">
  body {
    background-image: url(assets/images/<?php echo $bg; ?>);
    background-repeat: no-repeat;
  }
</style>
