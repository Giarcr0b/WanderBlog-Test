<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WanderBlog | Search</title>

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <!-- Sitewide CSS -->
    <link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

    <!-- Page CSS -->
    <link rel="stylesheet" type="text/css" href="css/search.css">

</head>
<body>

    <?php
        include("../inc/nav.php");
    ?>

    <div class="row">
        <div class="large-3 columns ">
            <div class="panel">
                <div class="section-container vertical-nav">
                    <form method="POST" action="php/search.php">
                        <label>Authors or Adventures:</label>
                        <select id="searchType" name="type">
                            <option value="both">Both</option>
                            <option value="authors">Authors</option>
                            <option value="adventures">Adventures</option>
                        </select>

                        <input id="search" type="text" name="search" placeholder="Search" value="" autofocus autocomplete="off">
                        <input class="button expanded" type="submit" value="Search">
                    </form>
                </div>
            </div>
        </div>

        <div class="large-8 columns" id="searchResults"></div>

    </div>

    <!-- This script handles the feedback to the user using ajax-->
    <script type="text/javascript" src="js/search.js"></script>

</body>
</html>