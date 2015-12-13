<?php

include("../../inc/connect.php");

//=================================================================================================
//this will check if the username and password input boxes are empty and if not will continue the code
//=================================================================================================

if(!empty($_POST['username']) AND !empty($_POST['password']))
{

    $user=$_POST['username'];
	$pass=$_POST['password'];

	//=================================================================================================
	// To protect from MySQL injection, removes certain characters to stop this
	//=================================================================================================
	$user = stripslashes($user);
	$user = $db->real_escape_string($user);
	$password = $db->real_escape_string($pass);

	$pass = hash('sha512',$pass);

	$query = $db->query("SELECT * FROM user WHERE user_name='$user' AND password='$pass'");

	//=================================================================================================
	// If result matched $user and $pass, table row must be 1 row
	//=================================================================================================

	if($query->num_rows == 1){ //if there is one row that matches the searched query
		$row = $query->fetch_array();
		if($row["is_verified"] == 1){

			//=================================================================================================
			// Register the users, username, and if they're and other, and if they're an admin then redirect to
			//=================================================================================================

			$query->close();
			session_start();
			$_SESSION["myusername"] = $row['user_name'];
			$_SESSION["isAuthor"] = $row['is_author'];
			$_SESSION["isAdmin"] = $row['is_admin'];
			echo "LoggedIn";
		}
		else{
			echo "NotVerified";
		}

	}
	else{
		echo "UserExistsPass";
	}
}
else
{
	echo "EmptyField";
}
$db->close();