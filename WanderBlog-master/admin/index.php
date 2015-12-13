<?php

session_start();

//=================================================================================================
//check if the user is an admin, if not they are redirected to the main page
//=================================================================================================
if(!$_SESSION['isAdmin'] == 1)
{
	header("location:../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--Tab Name-->
	<title>WanderBlog | Administration</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

	<!-- Page CSS	-->

	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Javascript file that loads in the navigation bar-->
	<script type="text/javascript" src="http://cosawanderblog.azurewebsites.net/inc/nav.js"></script>
</head>
<body>
	<nav></nav>
	<!-- Div that wraps all of the content on the page -->
	<div id="wrapper">
		<div class="adminContentBox">
			<h1>ADMIN</h1> <!-- this can be removed, its just for testing -->

			<!--	TEMPORARY LINKS		-->
			<a href="http://cosawanderblog.azurewebsites.net/admin/users">Users Admin</a>
			<br>
			<a href="http://cosawanderblog.azurewebsites.net/admin/adventures">Adventures Admin</a>

		</div>

	</div>
</body>
</html>