<?php
session_start();
$host = "localhost";
$user = "root";
$password = '#';
$database = 'picam';

//Assign username and password attempts to variables
$username=$_GET["username"];
$user_password=$_GET["password"];

$_SESSION['username'] = $username;
//Connect to database
$dbcnx = new mysqli($host, $user, $password, $database);
  
//Query the database for matching account
$sql = "SELECT * FROM users WHERE userName = '$username' AND passWord = '$user_password'";
$result = $dbcnx->query($sql);

if ($result->num_rows > 0) {
  //redirect
  header("Location: ../display.php");
  $_SESSION['logged'] = "true";
} else {
  //ERROR LOGGIN IN
  $_SESSION['logged'] = "tried"; 
  header("Location: ../index.php");
}

/*
if ($result->num_rows > 0) {
// output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["userName"]. " " . $row["passWord"]. "<br>";
  }
} else {
  echo "0 results";
}
*/

$dbcnx->close();
?>