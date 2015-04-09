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
 */
session_start();
//Set Variables
$host = 'localhost';
$user = 'root';
$db_password = 'sheepish123';
$database = 'picam';
//Get variables
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$username = $_GET['username'];
$password = $_GET['password'];
$repassword = $GET['re-password'];

echo $firstname;
//Execute logic
/*
if ($password !== $repassword) {
 // header("Location: register.html"); 
}
*/
//Connect to database
$dbcnx = new mysqli($host, $user, $db_password, $database);
echo "Successful connection";



//Create Query
$sql = "INSERT INTO users (firstname, lastname, email, username, password) VALUES
       ('$firstname', '$lastname', '$email', '$username', '$password');";
//Execute query
$result = $dbcnx->query($sql);

header("Location: index.php");



?>
