<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/21/2018
 * Time: 12:05 PM
 */

?>
<body>
<div id="wrapper">
    <h1>Forum</h1>
    <div id="menu">
        <a class="item" href="/index.php">Home</a> -
        <a class="item" href="/create_topic.php">Create a topic</a> -
        <a class="item" href="/create_cat.php">Create a category</a>

        <div id="userbar">
            <?php
            session_start();
            if($_SESSION['signed_in'])
            {
                echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="/signout.php">Sign out</a>';
            }
            else
            {
                echo '<a href="signin.php">Sign in</a> or <a href="/signup.php">Create an account</a>';
            }

            ?>

        </div>
    </div>



    </div><!-- wrapper -->
</body>

<link rel="stylesheet" href="/assets/style.css" type="text/css">