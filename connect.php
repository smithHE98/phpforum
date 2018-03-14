<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/7/2018
 * Time: 12:06 PM

 */
//Connect to database, run query, handle errors

$servername = "localhost";
$username = "admin";
$password = "Password1";
$database = "forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
