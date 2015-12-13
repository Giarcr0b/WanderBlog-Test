<?php
session_start();

//TODO add some way for users to reset their password

//=================================================================================================
//if the users session is already logged in it will automatically send them to the main page
//=================================================================================================
if(isset($_SESSION['myusername']))
{
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--Tab Name-->
	<title>WanderBlog | Login</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Javascript file that loads in the navigation bar-->
	<script type="text/javascript" src="http://cosawanderblog.azurewebsites.net/inc/nav.js"></script>
</head>
<body>
	<nav></nav>
	<!-- Div that wraps all of the content on the page -->
	<div id="wrapper">
		<form class="logRegBox" id="loginForm" method="POST" action="php/login.php">

			<h2>Login</h2>
			<input id="username" type="text" name="username" placeholder="Username" autofocus>
			<input id="password" type="password" name="password" placeholder="Password">
<!--			<a href="">Forgotten Password?</a>-->
			<input name="submit" type="submit" value="Login">
			<a href="http://cosawanderblog.azurewebsites.net/register">Need an Account? Register Now</a>

			<div id="feedback"></div>
		</form>
	</div>

	<!-- This script handles the feedback to the user using ajax-->
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>