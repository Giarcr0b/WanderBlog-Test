<!DOCTYPE html>
<html lang="en">
<head>
	<!--Tab Name-->
	<title>WanderBlog | Register</title>

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
	<div id="wrapper">
		<form class="logRegBox" id="formReg" method="POST" action="php/register.php">
			<h2>Register</h2>
			<input id="username" type="text" name="username" placeholder="Username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" autofocus autocomplete="off">
			<input id="password" type="password" name="password" placeholder="Password">
			<input id="repassword" type="password" name="repassword" placeholder="Confirm Password">
			<input name="submit" type="submit" value="Register">
			<div id="feedback"></div>
		</form>
	</div>

	<!-- This script handles the feedback to the user using ajax-->
	<script type="text/javascript" src="js/register.js"></script>
</body>
</html>