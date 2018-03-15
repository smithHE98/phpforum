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

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" />
        Category description: <textarea name="cat_description" /></textarea>
        <input type="submit" value="Add category" />
     </form>';
}
else
{
    $sql = "INSERT INTO
            categories
        (cat_name, 
        cat_description)
       VALUES 
       ('cat_name', 
       'cat_description', 
       'email')";

    $result = mysqli_query($sql);
    if(!$result)
    {
        echo "Error" . $mysqli_error();
    }
    else
    {
        echo "New category successfully added.";
    }
}
?>

</div>


<?php

include 'templates/footer.php';

?>


