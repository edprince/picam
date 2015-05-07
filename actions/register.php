<?php
/**
 * Registration Script
 * 
 * PHP version 5
 *
 * @category Script
 * @package  PiCam
 * @author   Ed Prince <edward_prince@hotmail.com>
 * @license  http://mit-license.org/ MIT License
 * @version  GIT: 0.1
 * @link     http://edprince.uk
 *
 * Fuction connect
 *
 * Connects to the database
 *
 * @param (host) host address of database
 * @param (user) mysql user
 * @param (db_password) mysql password
 * @param (database) database to use
 *
 * @return Some stuff
 */
session_start();
//Set Variables
$host = 'localhost';
$user = 'root';
$db_password = '#';
$database = 'picam';
//Get variables
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$username = $_GET['username'];
$password = $_GET['password'];
$repassword = $GET['re-password'];

$_SESSION['duplicateUser'] = "false"; 

//Hash password
$password = hash('whirlpool', $password);

//Connect to database
$dbcnx = new mysqli($host, $user, $db_password, $database);

//Check for duplicate users
$sql = "SELECT * FROM users WHERE username = '$username'";
echo $sql;
$result = $dbcnx->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['duplicateUser'] = "true";
    echo "If = true";
    header("Location: ../register.php");
} else {

    //Insert new user details into database
    $sql = "INSERT INTO users (firstname, lastname, email, username, password) VALUES
           ('$firstname', '$lastname', '$email', '$username', '$password');";
    //Execute query
    $result = $dbcnx->query($sql);

    header("Location: ../index.php");
} 


?>
