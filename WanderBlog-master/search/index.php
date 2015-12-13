<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WanderBlog | Search</title>

    <!-- Sitewide CSS -->
    <link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Javascript file that loads in the navigation bar-->
    <script type="text/javascript" src="http://cosawanderblog.azurewebsites.net/inc/nav.js"></script>

    <!-- Page CSS -->
    <link rel="stylesheet" type="text/css" href="css/search.css">

</head>
<body>

    <nav></nav>

    <div id="wrapper">
        <div id="content">
            <div id="searchOptions">
                <form method="POST" action="php/search.php">
                    <div>
                        <input id="navSearch" type="text" name="search" placeholder="Search" value="" autocomplete="off">
                    </div>

                    <div>
                        <label>Authors or Adventures:</label>
                        <select id="searchType" name="type">
                            <option value="both">Both</option>
                            <option value="authors">Authors</option>
                            <option value="adventures">Adventures</option>
                        </select>
                    </div>

<!--                    <div>-->
<!--                        <label>Superpowers:</label>-->
<!--                        <label>Flight</label><input type="checkbox" name="flight" value="flight" >-->
<!--                        <label>Laser Eyes</label><input type="checkbox" name="laser_eyes" value="laser_eyes">-->
<!--                    </div>-->

                    <div>
                        <input id="search" type="text" name="search" placeholder="Search" value="" autofocus autocomplete="off">
                        <input type="submit" value="Search">
                    </div>
                </form>
            </div>
            <div id="searchResults"></div>
        </div>
    </div>

    <!-- This script handles the feedback to the user using ajax-->
    <script type="text/javascript" src="js/search.js"></script>

</body>
</html>