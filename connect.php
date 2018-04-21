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
$password = "WorkNow001";
$db_name = "forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



