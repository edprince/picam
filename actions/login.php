<?php
/**
 * Login Script
 *
 * PHP version 5
 *
 * @category Script
 * @package  PiCam
 * @author   Ed Prince <edward_prince@hotmail.com>
 * @license  http://mit-license.org/ MIT License
 * @version  GIT: 0.1
 * @link     http://edprince.uk
 */
session_start();
$host = "localhost";
$user = "root";
$password = '#';
$database = 'picam';

//require "../.gitignore/secure.php";
//Assign username and password attempts to variables
$username = $_GET["username"];
$user_password = $_GET["password"];

$_SESSION['username'] = $username;
//Connect to database
$dbcnx = new mysqli($host, $user, $password, $database);
  
//Hash user_password
$user_password = hash('whirlpool', $user_password);

//Query the database for matching account
$sql = "SELECT * FROM users WHERE
  userName = '$username'
  AND passWord = '$user_password'";

$result = $dbcnx->query($sql);
$_SESSION['result'] = $result;

if ($result->num_rows > 0) {
  
    //Get user Id
    $sql = "SELECT id FROM users WHERE username = '$username' AND password = '$user_password'";
    $id = $dbcnx->query($sql);
    while ($row = $id->fetch_assoc()) {
        $_SESSION['id'] = $row["id"];

    }
      
    //redirect
    $_SESSION['logged'] = "true";
    $_SESSION['duplicateUser'] = "false";
    header("Location: ../display.php");
} else {
    //ERROR LOGGING IN
    $_SESSION['logged'] = "tried"; 
    header("Location: ../index.php");
}


$dbcnx->close();
?>
