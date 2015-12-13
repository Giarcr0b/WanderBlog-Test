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
    <link rel="stylesheet" type="text/css" href="../css/admin.css">

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
            <h1>Edit User</h1>
            <form id="editUserForm" method="POST" action="php/updateUser.php">

                <?php

                    include('../../inc/connect.php');

                    if(isset($_GET['id'])) {

                        $userId = $_GET['id'];
                        $query = $db->query("SELECT * FROM user WHERE user_id='$userId'");

                        if($query->num_rows >0) {
                            $row = $query->fetch_array();

                            $userId = $row['user_id'];
                            $username = $row['user_name'];
                            $name = $row['name'];
                            $isAuthor = $row['is_author'];
                            $isAdmin = $row['is_admin'];
                            $isVerified = $row['is_verified'];
                        }
                        else{
                            $isAuthor = 0;
                            $isAdmin = 0;
                            $isVerified = 0;

                ?>
                            <script type="text/javascript">
                                $('#editUserForm').hide();
                                $('.adminContentBox h1').text("No user with UserID: <?php echo $_GET['id'];?>");
                            </script>
                <?php
                        }
                    }
                ?>

                <label>User ID
                    <input id="userID" type="text" name="userid" placeholder="User ID" disabled value="<?php if (isset($userId)){ echo $userId;} ?>" >
                </label>

                <label>Username
                    <input id="username" type="text" name="username" placeholder="Username" disabled value="<?php if (isset($username)){ echo $username;} ?>" >
                </label>

                <label>Name
                    <input id="name" type="text" name="name" placeholder="Name"  autocomplete="off" value="<?php if (isset($name)) echo $name; ?>">
                </label>

                <label>Is Author
                <select id="selectAuthor" name="selectAuthor">
                    <option value="1" <?php if($isAuthor == 1){echo "selected"; }?>>Yes</option>
                    <option value="0" <?php if($isAuthor == 0){echo "selected"; }?>>No</option>
                </select>
                </label>

                <label>Is Admin
                    <select id="selectAdmin" name="selectAdmin">
                        <option value="1" <?php if($isAdmin == 1){echo "selected"; }?>>Yes</option>
                        <option value="0" <?php if($isAdmin == 0){echo "selected"; }?>>No</option>
                    </select>
                </label>

                <label>Is Verified
                    <select id="selectVerified" name="selectVerified">
                        <option value="1" <?php if($isVerified == 1){echo "selected"; }?>>Yes</option>
                        <option value="0" <?php if($isVerified == 0){echo "selected"; }?>>No</option>
                    </select>
                </label>

                <input id="update" name="submit" type="submit" value="Update">

                <div id="feedback"></div>

            </form>
        </div>
    </div>

    <!-- This script handles the feedback to the user using ajax-->
    <script type="text/javascript" src="js/updateUser.js"></script>
</body>
</html>
