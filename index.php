

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="An online messaging forum." />
    <meta name="keywords" content="forum, messaging" />
    <title>Forum</title>
    <link rel="stylesheet" href="/assets/style.css" type="text/css">
</head>
<body>
<h1>Forum</h1>
<div id="wrapper">
    <div id="menu">
        <a class="item" href="/index.php">Home</a> -
        <a class="item" href="/create_topic.php">Create a topic</a> -
        <a class="item" href="/create_cat.php">Create a category</a>

        <div id="userbar">
            <?php

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

        <div id="content">
            STUFF <br>
            LOTS OF STUFF <br>
            LOTS OF STUFF <br>
            LOTS OF STUFF LOTS OF STUFF  LOTS OF STUFF <br>


        </div><!-- content -->
        <div id="footer">CREATED BY HANNAH SMITH</div>
    </div><!-- wrapper -->

</body>
</html>