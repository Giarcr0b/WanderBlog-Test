<?php

include('../../../inc/connect.php');

$userId = $_POST['userid'];
$username = $_POST['username'];
$name = mysqli_real_escape_string($db,$_POST['name']);
$isAuthor = $_POST['isAuthor'];
$isAdmin = $_POST['isAdmin'];
$isVerified = $_POST['isVerified'];

//Test echo
//echo "id: " .$userId. " | username: " . $username . " | name: " . $name . " | isAuth: " . $isAuthor . " | isAdm: " . $isAdmin . " | isVer: " . $isVerified . "<br>";

$query = $db->query("UPDATE user SET name='$name',is_author=b'$isAuthor',is_admin=b'$isAdmin',is_verified=b'$isVerified' WHERE user_id='$userId'");
if ($query) {
    echo "User updated";
} else {
    echo "User not updated";
}
$db->close();
