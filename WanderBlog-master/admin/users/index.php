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
	<title>WanderBlog | Admin | Users</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

	<!-- Page CSS	-->

	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Javascript file that loads in the navigation bar-->
	<script type="text/javascript" src="http://cosawanderblog.azurewebsites.net/inc/nav.js"></script>

	<!-- Libary that allows for sortable tables	-->
	<script src="../js/sortTable.js"></script>
</head>
<body>
	<nav></nav>
	<!-- Div that wraps all of the content on the page -->
	<div id="wrapper">
		<div class="adminContentBox">
			<h1>Users</h1>

			<table class="sortable">
				<tr>
					<th></th>
					<th>User ID</th>
					<th>Username</th>
					<th>Name</th>
					<th>Author</th>
					<th>Admin</th>
					<th>Verified</th>
				</tr>
				<?php
					include("php/adminUsers.php");
				?>
			</table>

		</div>

	</div>
</body>
</html>