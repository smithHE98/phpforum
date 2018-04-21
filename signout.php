<link rel="stylesheet" href="/assets/style.css" type="text/css">

<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/26/2018
 * Time: 11:45 AM
 */

include 'connect.php';
include 'templates/header.php';

?>

<div id="content">

<?php

echo '<h3>Sign Out</h3>';

session_start();
session_destroy();

echo 'You have been signed out. You can <a href="/index.php">go back to the main page</a>.';

?>

</div>

<?php

include 'templates/footer.php';

?>

