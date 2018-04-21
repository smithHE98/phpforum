<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/21/2018
 * Time: 11:57 AM
 */

include 'connect.php';
include 'templates/header.php';

?>

<div id="content">

    <?php

    echo '<h3>Create New Topic</h3><br>';

    if($_SESSION['signed_in'] == false)
    {
        echo 'Sorry, you have to be <a href="/signin.php">signed in</a> to create a topic.';
    }
    else
    {
    if($_SERVER['REQUEST_METHOD'] != 'POST') {

    $sql = "SELECT
                    cat_id,
                    cat_name,
                    cat_description
                FROM
                    categories";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'Error while selecting from database. Please try again later.';
    } else {
        if (mysqli_num_rows($result) == 0) {
            echo '';
        if ($_SESSION['user_level'] == 1) {
            echo 'You have not created categories yet.';
        } else {
            echo 'Before you can post a topic, you must wait for an admin to create some categories.';
        }
    } else { ?>

    <form method="post" action="">
        Subject name: <input type="text" name="topic_subject"> <br> <br>
        Category:

        <select name="topic_cat"> <?
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<? echo $row['cat_id'] ?>"> <? echo $row['cat_name'] ?></option>
<? } ?>
        </select> <br> <br>

        Message: <textarea name="post_content"/></textarea> <br>
        <br>
        <input type="submit" value="Create topic"/>
    </form>

    <?
                    }
                }
             }


        else {
            $query = "BEGIN WORK;";
            $result = mysqli_query($conn, $query);

            if (!$result) {
                echo 'An error occurred while creating your topic. Please try again later.';
            } else {

                $sql = "INSERT INTO 
                        topics(topic_subject,
                               topic_date,
                               topic_cat,
                               topic_by)
                   VALUES('" . ($_POST['topic_subject']) . "',
                               NOW(),
                               " . ($_POST['topic_cat']) . ",
                               '" . ($_SESSION['user_name']) . "'
                               )";

                $result = mysqli_query($conn, $sql);
                if (!$result) {

                    echo 'An error occurred while inserting your data. Please try again later.';
                    $sql = "ROLLBACK;";
                    $result = mysqli_query($conn, $sql);
                } else {

                    $topicid = mysqli_insert_id($conn);

                    $sql = "INSERT INTO
                            posts(post_content,
                                  post_date,
                                  post_topic,
                                  post_by)
                        VALUES
                            ('" . ($_POST['post_content']) . "',
                                  NOW(),
                                  " . $topicid . ",
                                  '" . $_SESSION['user_name'] . "'
                            )";
                    $result = mysqli_query($conn, $sql);

                    if (!$result) {
                        echo 'An error occurred while inserting your post. Please try again later.';
                        $sql = "ROLLBACK;";
                        $result = mysqli_query($conn, $sql);
                    } else {
                        $sql = "COMMIT;";
                        $result = mysqli_query($conn, $sql);

                        echo 'You have successfully created <a href="topic.php?id=' . $topicid . '">your new topic</a>.';
                    }
                }
            }
        }
    }

    ?>

</div>

<?php
include 'templates/footer.php';
?>



<link rel="stylesheet" href="/assets/style.css" type="text/css">

