<?php
//
//session_start();
//
////=================================================================================================
////check if a user is logged in, if not they are redirected to the main page
////=================================================================================================
//if(!isset($_SESSION['myusername']))
//{
//    header("location:../index.php");
//}
$selected = $_GET["query"];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--Tab Name-->
    <title>WanderBlog | Author</title>

    <!-- Metadata about the webpage-->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <!-- Sitewide CSS -->
    <link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

    <!-- Page CSS	-->


</head>
<body>

<?php
include("../inc/nav.php");
?>
<div id="wrapper">
    <div id="authorDetails">
<table>
    <tr>
        <th>Author <?php echo $selected ?> Details</th>
    </tr>
    <tr>
        <td>Name: </td>
        <?php
            include("php/authorName.php");
        ?>
    </tr>
    <tr>
        <td>Country: </td>
        <?php
          include("php/authorCountry.php");
        ?>
    </tr>
</table>

    </div>
    <div id="adventureList">

    </div>
</div>
</body>
</html>