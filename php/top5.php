<?php

include("inc/connect.php");

$query = $db->query("SELECT * FROM user,adventure WHERE adventure.user_id = user.user_id ORDER BY vote_score DESC LIMIT 5 ");

if($query->num_rows > 0) { //if there is one row that matches the searched query
    while($row = $query->fetch_array()){
        $top5Rows[] = $row;
    }

    foreach ($top5Rows as $row) {
        echo '<div class="row column">
                <div class="row column">'. $row['vote_score']. ' <a><strong>' . $row['title'] .'</strong></a></div>
                    <p>by ' . $row['user_name'] . '</p>
                </div>
                <hr>';
    }
}
else{
    echo '<div class="row column">
                No Posts Yet
                <hr>';
}