<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/28/2018
 * Time: 11:16 AM
 */
include 'connect.php';
include 'templates/header.php';

?>

    <div id="content">

        <?php

        $sql = "SELECT
    topic_id,
    topic_subject
FROM
    topics
WHERE
    topics.topic_id = " . ($_GET['id']);



        $result = mysqli_query($conn, $sql);

        if(!$result)
        {
            echo 'The topic could not be displayed. Please try again later.';
        }
        else
        {
            if(mysqli_num_rows($result) == 0)
            {
                echo 'This topic does not exist.';
            }
            else
            {

                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<h2>Posts in ′' . $row['topic_subject'] . '′ topic</h2>';
                }

                $sql = "SELECT
            posts.post_id,
            posts.post_topic,
            posts.post_content,
            posts.post_date,
            posts.post_by,
            users.user_id,
            users.user_name
        FROM
            posts
        LEFT JOIN
            users
        ON
            posts.post_by = users.user_name
        WHERE
            posts.post_topic = " . ($_GET['id']);

                $result = mysqli_query($conn, $sql);

                if(!$result)
                {
                    echo 'The posts could not be displayed. Please try again later.';
                }
                else
                {
                    if(mysqli_num_rows($result) == 0)
                    {
                        echo 'There are no posts in this topic yet.';
                    }
                    else
                    { ?>

                        <table border= "1">
                   <?     while($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                            <td class="leftpart2">
                            <? echo $row['post_by']; ?><br><? echo date('d-m-Y H:i:s', strtotime($row['post_date'])); ?>
                            </td>
                            <td class="rightpart2"> <? echo $row['post_content']; ?>
                            </td>
                            </tr>
                   <? } ?>
                        </table>
<?

        ?>
<br><br>
        <h3>Reply:</h3><br>

        <form method="post"
              action="reply.php?id=<? echo ($_GET['id']);?>">
            <textarea name="reply-content"></textarea><br>
            <input type="submit" value="Submit reply" />

        </form>
        <?
                    }
                }
            }
        }
        ?>



    </div>

<?php

include 'templates/footer.php';

?>