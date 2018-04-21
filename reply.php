<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 3/28/2018
 * Time: 2:49 PM
 */

include 'connect.php';
include 'templates/header.php';

?>

<div id="content">

    <?php


if($_SERVER['REQUEST_METHOD'] != 'POST')
{

    echo 'This file cannot be called directly.';
}
else
{
    if(!$_SESSION['signed_in'])
    {
        echo 'You must be signed in to post a reply.';
    }
    else
    {

        $sql = "INSERT INTO 
                    posts(post_content,
                          post_date,
                          post_topic,
                          post_by) 
                VALUES ('" . $_POST['reply-content'] . "',
                        NOW(),
                        " . ($_GET['id']) . ",
                        '" . $_SESSION['user_name'] . "')";

        $result = mysqli_query($conn, $sql);

        if(!$result)
        {
            echo mysqli_error($conn);
            echo 'Your reply has not been saved. Please try again later.';
        }
        else
        {
            echo 'Your reply has been saved. You can now view <a href="topic.php?id=' . htmlentities($_GET['id']) . '">the topic</a>.';
        }
    }
}

?>
</div>

<?php
include 'templates/footer.php';
?>
