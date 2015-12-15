<!DOCTYPE html>
<html lang="en">
<head>
	<!--Tab Name-->
	<title>WanderBlog | Register</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Foundation CSS -->
	<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

</head>
<body>

	<?php
		session_start();
		include("../inc/nav.php")
	?>

	<div class="row">
		<div class="medium-6 medium-centered large-4 large-centered columns">
			<form  method="POST" action="php/register.php">
				<div class="row column contentBox">
					<h4 class="text-center">Register</h4>
					<label>Username
						<input id="username" type="text" name="username" placeholder="Username" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" autofocus autocomplete="off">
					</label>
					<label>Password
						<input id="password" type="password" name="password" placeholder="Password">
					</label>
					<label>Confirm Password
						<input id="repassword" type="password" name="repassword" placeholder="Confirm Password">
					</label>
					<div id="feedback"></div>
					<input type="submit" class="button expanded" value="Register"/>
<!--					<p class="text-center"><a href="#">Forgot your password?</a></p>-->
				</div>
			</form>
		</div>
	</div>

	<!-- This script handles the feedback to the user using ajax-->
	<script type="text/javascript" src="js/register.js"></script>
</body>
</html>