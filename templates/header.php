<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/21/2018
 * Time: 12:05 PM
 */

include 'connect.php';
?>
<body>
<div id="wrapper">
    <h1>discussion forum</h1>
    <div id="menu">
        <a class="item" href="/index.php">FORUM</a> -
        <a class="item" href="/members.php">MEMBERS</a> -
        <a class="item" href="/create_cat.php">CREATE NEW CATEGORY</a> -
        <a class="item" href="/create_topic.php">CREATE NEW TOPIC</a>


        <div id="userbar">
            <?php


            session_start();

       //     if(isset())



            if($_SESSION['signed_in'] == true)
            {
            if(isset($_SESSION["user_name"])) {
                echo 'Hello, ' . $_SESSION['user_name'] . '. Not you? <a class="item" href="/signout.php">Sign out</a>';
            } else {
                echo 'Welcome, forumer.' . ' <a class="item" href="/signout.php">Sign out</a>';
            }


            }
            else
            {
                session_destroy();
                echo '<a href="/signin.php">Sign in</a> or <a href="/signup.php">Create an account</a>';
            }

            ?>

             </div>
        </div>
    </div>
</body>

<link rel="stylesheet" href="/assets/style.css" type="text/css">