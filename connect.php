<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/7/2018
 * Time: 12:06 PM

 */
//Connect to database, run query, handle errors

$servername = "localhost";
$database = "forum";

// Create connection
$conn = mysqli_connect($servername, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
