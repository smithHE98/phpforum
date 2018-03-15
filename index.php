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
                    <table>
                        <tr>
                            <td class="leftpart">
                                <h3><a href="/category.php?id=">Category name</a></h3> Category description goes here
                            </td>

                            <td class="rightpart">
                                <a href="/topic.php?id=">Topic subject</a>
                            </td>
                        </tr>
                    </table>

        </div><!-- content -->

</body>

</html>


<?php
include 'templates/footer.php';


?>