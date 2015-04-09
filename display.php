<!DOCTYPE html>
<?php
  session_start();
if ($_SESSION['logged'] == "") {
    header("Location: index.php");
}

if ($_SESSION['logged'] == "tried") {
    header("Location: index.php");
}
$username = $_SESSION['username'];
?>
<?php require "includes/header.php"; ?>
<head>
  <link href="assets/styles/displaystyle.css" type="text/css" rel="stylesheet">
</head>
  <body>
    <?php require_once "includes/analyticstracking.php"; ?>
    <nav>
      <div class="left">
        <a href="display.php">
          <p>Your Cam</p>
        </a>
        <a href="about.php">
          <p>About</p>
        </a>
        <a href="user.php">
          <p>User Manual</p>
        </a>
        <a href="https://github.com/edprince/picam">
          <p>Source Code</p>
        </a>
      </div>
      <div class="right">
        <a href="index.php">
          <p>Sign Out</p>
        </a>
      </div>
    </nav>
    <img class="display" src="assets/images/oldest.jpg" width="70%" /> 
    <div class="footer">
      
    </div>
<?php require "includes/footer.php"; ?>
