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

echo $firstname;

$password = hash('whirlpool', $password);


//Connect to database
function connect($host, $user, $db_password, $database)
{
    $dbcnx = new mysqli($host, $user, $db_password, $database);
    echo "Connection successful!!!!!";
}

echo "Successful connection";

function checkOtherUsers($attempt)
{
    echo "Function running";
    $sql = "SELECT * FROM users WHERE username = '$attempt'";
    echo $sql;
    connect($host, $user, $db_password, $database);
    $new_result = $dbcnx->query($sql);
    echo "Boo!";
    echo $new_result;
    if ($new_result->num_rows > 0) {
        echo "HEY!";
        $_SESSION['duplicateUser'] = "true";
        echo "If = true";
        header("Location: ../index.php");
        echo "FAIL";
    } else {
        echo "SUCCESS";
        $_SESSION['duplicateUser'] = "false";
    }
}


checkOtherUsers($username);

echo "Function concluded";
//Create Query
$sql = "INSERT INTO users (firstname, lastname, email, username, password) VALUES
       ('$firstname', '$lastname', '$email', '$username', '$password');";
//Execute query
$result = $dbcnx->query($sql);

header("Location: ../index.php");



?>
