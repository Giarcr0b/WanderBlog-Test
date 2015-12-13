<?php

session_start();

//=================================================================================================
//check if a user is logged in, if not they are redirected to the main page
//=================================================================================================
if(!isset($_SESSION['myusername']))
{
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WanderBlog Author Page</title>

    <!-- Sitewide CSS -->
    <link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net//css/sitewide.css">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Javascript file that loads in the navigation bar-->
    <script type="text/javascript" src="http://cosawanderblog.azurewebsites.net//inc/nav.js"></script>

</head>
<body>

    <nav></nav>
    <div id="wrapper">
        <div id="authorDetails">


        </div>
        <div id="adventureList">

        </div>
    </div>
</body>
</html>