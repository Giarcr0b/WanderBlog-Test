<?php
    //TODO add dropdown for admin
    //TODO add dropdown when screen is small
    session_start();
?>
<ul id="navSiteName">
    <!--Website Name-->
    <li >
        <a href="http://cosawanderblog.azurewebsites.net/" >WanderBlog</a>
    </li>

</ul>
<div id="navRight">
<!--    <ul>-->
<!--        <form method="POST" action="http://cosawanderblog.azurewebsites.net/search">-->
<!--            <input id="navSearch" type="text" name="search" placeholder="Search" value="" autocomplete="off">-->
<!--        </form>-->
<!--    </ul>-->

    <ul class="dropdown">
        <?php
        //=================================================================================================
        //check if the isAdmin session variable and if the user is an admin then display the admin link
        //=================================================================================================
        if(isset($_SESSION['isAdmin'])){
            if($_SESSION['isAdmin'] == '1'){
                echo '<li><a href="http://cosawanderblog.azurewebsites.net/admin" id="navAdmin">Administration</a>';
                echo '<ul>'
                    . '<li><a href="http://cosawanderblog.azurewebsites.net/admin/users">Users</a></li>'
                    . '<li><a href="http://cosawanderblog.azurewebsites.net/admin/adventures">Adventures</a></li>'
                    . '</ul>'
                    . '</li>';
            }
        }
        ?>
    </ul>
    <!--Login Registration area    -->

    <ul>
        <?php
        //=================================================================================================
        //check if the myUsername session variable is set and if so, display their username and logout link
        //=================================================================================================
        if(isset($_SESSION['myusername'])){

            echo '<li><a href="http://cosawanderblog.azurewebsites.net/inc/logout.php" id="navLog">Logout</a></li>';
        }
        else{
            echo '<li><a href="http://cosawanderblog.azurewebsites.net/login" id="navLog">Login</a></li>' .
                '<li><a href="http://cosawanderblog.azurewebsites.net/register" id="navReg">Register</a></li>';
        }

        ?>
    </ul>

    <!--  Small Menu  -->

    <ul id="navMenu" class="dropdown">
        <li ><a href="#">Menu</a></li>
        <ul>
        <?php
        //=================================================================================================
        //check if the isAdmin session variable and if the user is an admin then display the admin link
        //=================================================================================================
        if(isset($_SESSION['isAdmin'])){
            if($_SESSION['isAdmin'] == '1'){
                echo '<li><a href="http://cosawanderblog.azurewebsites.net/admin" id="navAdmin">Administration</a>';
                echo '<ul>'
                    . '<li><a href="http://cosawanderblog.azurewebsites.net/admin/users">Users</a></li>'
                    . '<li><a href="http://cosawanderblog.azurewebsites.net/admin/adventures">Adventures</a></li>'
                    . '</ul>'
                    . '</li>';
            }
        }
        ?>
        <!--Login Registration area    -->

        <?php
        //=================================================================================================
        //check if the myUsername session variable is set and if so, display their username and logout link
        //=================================================================================================
        if(isset($_SESSION['myusername'])){

            echo '<li><a href="http://cosawanderblog.azurewebsites.net/inc/logout.php" id="navLog">Logout</a></li>';
        }
        else{
            echo '<li><a href="http://cosawanderblog.azurewebsites.net/login" id="navLog">Login</a></li>' .
                '<li><a href="http://cosawanderblog.azurewebsites.net/register" id="navReg">Register</a></li>';
        }

        ?>
        </ul>
    </ul>
</div>





