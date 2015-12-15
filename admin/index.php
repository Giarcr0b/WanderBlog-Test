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
	<title>WanderBlog | Admin</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Foundation CSS -->
	<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

	<!-- Page CSS	-->
	<link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body>

	<?php
		include("../inc/nav.php");
	?>
	<div class="row">
		<div class="medium-6 medium-centered large-4 large-centered columns">
			<div class="row column contentBox">
				<h3 class="text-center">ADMIN</h3>
				<p class="text-center"><a href="http://cosawanderblog.azurewebsites.net/admin/users">Users Admin</a></p>
				<p class="text-center"><a href="http://cosawanderblog.azurewebsites.net/admin/adventures">Adventures Admin</a></p>
			</div>
		</div>
	</div>
</body>
</html>