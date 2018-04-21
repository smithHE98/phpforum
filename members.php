<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 3/26/2018
 * Time: 1:32 PM
 */

include 'connect.php';
include 'templates/header.php';

?>

<div id="content">

    <?php

    echo '<h3>Member List</h3>';

    $sql = "SELECT user_id, user_name FROM users";

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<br> ID: ". $row["user_id"]. " - Username: ". $row["user_name"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

</div>

<?php
include 'templates/footer.php';
?>

<link rel="stylesheet" href="/assets/style.css" type="text/css">