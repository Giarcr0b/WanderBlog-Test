<div class="top-bar" id="nav-menu">
    <div class="top-bar-left">
        <ul class="menu" data-dropdown-menu>
            <li class="name"><a href="http://cosawanderblog.azurewebsites.net/">WanderBlog</a></li>

<!--            <li><input id="navSearch" name="navSearch" type="search" placeholder="Search"></li>-->
<!--            <li><button id="navSearchBut" type="button" class="button">Search</button><li/>-->
            <li><a href="http://cosawanderblog.azurewebsites.net/search">Search</a></li>

        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>

            <?php
            //=================================================================================================
            //check if the isAdmin session variable and if the user is an admin then display the admin link
            //=================================================================================================
            if(isset($_SESSION['isAdmin'])){
                if($_SESSION['isAdmin'] == '1'){
                    echo '<li class="has-submenu">
                            <a href="#">Admin</a>
                            <ul class="submenu menu vertical" data-submenu>
                                <li><a href="http://cosawanderblog.azurewebsites.net/admin/users">Users</a></li>
                                <li><a href="http://cosawanderblog.azurewebsites.net/admin/adventures">Adventures</a></li>
                            </ul>
                          </li>';
                }
            }
            ?>

            <?php
            //=================================================================================================
            //check if the myUsername session variable is set and if so, display their username and logout link
            //=================================================================================================
            if(isset($_SESSION['myusername'])){

                echo '<li><a href="http://cosawanderblog.azurewebsites.net/inc/logout.php">Logout</a></li>';
            }
            else{
                echo '<li><a href="http://cosawanderblog.azurewebsites.net/login">Login</a></li>' .
                    '<li><a href="http://cosawanderblog.azurewebsites.net/register">Register</a></li>';
            }

            ?>

        </ul>
    </div>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
