<?php
include 'connect.php';
include 'templates/header.php';
?>

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
<div id="content">

<?php

$sql = "SELECT
            categories.cat_id,
            categories.cat_name,
            categories.cat_description
        FROM
            categories";

$result = mysqli_query($conn, $sql);

if(!$result)
{
    echo 'The categories could not be displayed. Please try again later.';
}
else {
 //   if ($result == 0) {
   //     echo 'No categories defined yet.';
  //  } else {

         ?>
    <table border="1">

        <tr>
            <th>Category</th>
<!--            <th>Last topic</th>-->
        </tr>

   <? while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td class="leftpart">
                        <h3><a href="/category.php?id=<? echo $row['cat_id']; ?>"><? echo $row['cat_name']; ?></a></h3> <br><? echo $row['cat_description']; ?>
                    </td>

<!--                    <td class="rightpart">-->
<!--                        <a href="/topic.php?id=--><?// echo $row['topic_id']; ?><!--">--><?// echo $row['topic_subject']; ?><!--</a> at --><?// echo date('d-m-Y H:i:s', strtotime($row['topic_date'])); ?>
<!--                    </td>-->
                </tr>
   <? }
   ?>
            </table>


            </div>

<? } ?>

            </body>

            </html>


            <?php

include 'templates/footer.php';
?>