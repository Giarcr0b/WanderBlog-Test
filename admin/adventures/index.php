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
	<title>WanderBlog | Admin | Posts</title>

	<!-- Metadata about the webpage-->
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>

	<!-- Foundation CSS -->
	<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

	<!-- Sitewide CSS -->
	<link rel="stylesheet" type="text/css" href="http://cosawanderblog.azurewebsites.net/css/sitewide.css">

	<!-- Page CSS	-->
	<link rel="stylesheet" type="text/css" href="../css/admin.css">

	<!-- Libary that allows for sortable tables	-->
	<script src="../js/sortTable.js"></script>
</head>
<body>

	<?php
		include("../../inc/nav.php")
	?>

	<div class="column row">
		<h3 class="text-center">Adventures Admin</h3>
		<table class="sortable">
			<tr>
				<th class="sorttable_nosort"></th>
				<th>Adventure ID</th>
				<th>Title</th>
				<th>Country</th>
				<th>Vote Score</th>
				<th>Author ID</th>
				<th>Author Name</th>
			</tr>
			<?php
				include("php/adminAdventures.php");
			?>
		</table>
	</div>

</body>
</html>