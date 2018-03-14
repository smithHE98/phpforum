<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/21/2018
 * Time: 11:58 AM
 */

include 'connect.php';
include 'templates/header.php';

echo '<tr>';
echo '<td class="leftpart">';
echo '<h3><a href="/category.php?id=">Category name</a></h3> Category description goes here';
echo '</td>';

echo '<td class="rightpart">';
echo '<a href="/topic.php?id=">Topic subject</a> at 10-10';
echo '</td>';
echo '</tr>';

include 'templates/footer.php';
?>

<link rel="stylesheet" href="/assets/style.css" type="text/css">
