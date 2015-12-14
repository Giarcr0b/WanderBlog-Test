<?php

include("inc/connect.php");

$query = $db->query("SELECT * FROM user,adventure WHERE user.user_id = adventure.user_id ORDER BY adventure_id DESC");

if($query->num_rows > 0) { //if there is one row that matches the searched query

    while($row = $query->fetch_array()){
        $postsRows[] = $row;
    }

    foreach ($postsRows as $row) {
        echo '<div class="blog-post">
                <h3>' . $row['title'] . ' <small></small></h3>
                <img class="thumbnail" src="http://placehold.it/850x250">
                <p>' . $row['body'].'</p>
                <div class="callout">
                    <ul class="menu simple">
                        <li><a href="#">Author: ' . $row['user_name'] . '</a></li>
                        <li><a href="#">Comments: 3</a></li>
                    </ul>
                </div>
            </div>';
    }
}
else{
    echo '<div class="blog-post">
                <h3>No Posts Yet</h3>
            </div>';
}




