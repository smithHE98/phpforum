<link rel="stylesheet" href="/assets/style.css" type="text/css">

<?php
/**
 * Created by PhpStorm.
 * User: han
 * Date: 2/21/2018
 * Time: 11:58 AM
 */

include 'connect.php';
include 'templates/header.php';

?>


<div id="content">

<?php

echo '<h3>Create New Category</h3><br>';

if($_SESSION['signed_in'] == false)
{

    echo 'Sorry, you have to be <a href="/signin.php">signed in</a> to create a category.';
}
else {

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" /> <br>
        <br>
        Category description: <textarea name="cat_description" /></textarea> <br>
        <br>
        <input type="submit" value="Create category" />
     </form>';
    } else {
        $sql = "INSERT INTO
            categories
        (cat_name, 
        cat_description)
       VALUES 
       ('" . ($_POST['cat_name']) . "',
        '" . ($_POST['cat_description']) . "')";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error" . $mysqli_error();
        } else {
            echo "New category successfully added.";
        }
    }
}
?>

</div>


<?php

include 'templates/footer.php';

?>