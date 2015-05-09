<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['logged'] == "") {
    //header("Location: index.php");
}

if ($_SESSION['logged'] == "tried") {
    //header("Location: index.php");
}
$username = $_SESSION['username'];
?>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"
        href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href="//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/normalize.css"
        rel="stylesheet"/>
  <link href="assets/styles/foundation.css" type="text/css" rel="stylesheet" />


  <link href="assets/styles/displaystyle.css" type="text/css" rel="stylesheet">
  <script src="assets/js/update.js"></script>
</head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="display.php">
          <i class="fa fa-camera"></i>
          Your Cam
        </a> | 
        <a href="about.php">
          <i class="fa fa-gear"></i>
          About
        </a> |
        <a href="assets/user-manual.pdf" target="_blank">
          <i class="fa fa-book"></i>
          User Manual
        </a> |
        <a href="https://github.com/edprince/picam" target="_blank">
          <i class="fa fa-github"></i>
          Source Code
        </a> | 
        <a href="index.php">
          <i class="fa fa-sign-out"></i>
          Sign Out
        </a>
      </div>
    </nav>
    <div class="image-wrapper">
      <img class="display" id="cam" src="assets/images/latest.jpg" /> 
    </div>
<?php require "includes/footer.php"; ?>
