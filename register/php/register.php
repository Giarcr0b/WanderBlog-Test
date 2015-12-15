<?php
//TODO https://secure.php.net/manual/en/function.preg-match.php or https://secure.php.net/manual/en/function.ctype-alnum.php
include('../../inc/connect.php');

$passLen = 8; // minimum length for a password

if(!empty($_POST['username'])) //check if the username textbox isn't empty
{
	$query = $db->query("SELECT user_name FROM user WHERE user_name = '$_POST[username]'");
	if ($query->num_rows >0)
	{
		echo "UserExists";
	}
	else
	{
		if($_POST['password'] == $_POST['repassword'])
		{
			if(strlen($_POST['password'])>=$passLen)
			{
				$user = $_POST['username'];
				$pass = $_POST['password'];

				if(newUser($user,$pass,$db))
				{
					echo "UserCreated";
				}
				else
				{
					echo "UserNotCreated";
				}
			}
			else
			{
				echo "PassLen";
			}
		}
		else
		{
			echo "PassSame";
		}
	}
}
else
{
	echo "EmptyField";
}

function newUser($username,$password,$db)
{
	// To protect from MySQL injection
	$username = strip_tags($username);
	$username = $db->real_escape_string($username);
	$password = $db->real_escape_string($password);
	$password = hash('sha512',$password);

	$query = $db->query("INSERT INTO user(user_name,name,password) VALUES ('$username','$username','$password')");
	if($query) //if the query is true
	{
		return true;
	}
	else
	{
		return false;
	}
}