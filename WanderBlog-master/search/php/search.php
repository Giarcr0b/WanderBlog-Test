<?php

include("../../inc/connect.php");

if(!empty($_POST['search'])){

    $search = $_POST['search'];
    $searchType = $_POST['searchType'];

    $query = $db->query("SELECT * FROM user,adventure WHERE adventure.user_id = user.user_id AND user_name LIKE '%$search%' OR title LIKE '%$search%'");

    //AND user_name LIKE '%$search%' OR title LIKE '%$search%'

    if($query->num_rows > 0) { //if there is one row that matches the searched query
        while($row = $query->fetch_array()){
            $rows[] = $row;
        }

        if($searchType == "authors" || $searchType == "both") {
            foreach ($rows as $row) {
                echo '<div id="resultUser">' . $row['user_name'] . '</div>';
            }
        }

        if($searchType == "adventures" || $searchType == "both"){
            foreach ($rows as $row) {
                echo '<div id="resultAdventure">'
                    . '<h2>' . $row['title'] . '</h2>'
                    . '<p>' . $row['body'] . '</p>'
                    . '<p>' . $row['user_name'] . '</p>'
                    . '</div>';
            }
        }


        echo '<p>Results Found:' . $query->num_rows . '</p>';
    }
    else{
        echo "no results";
    }
}
else{
    echo "search empty";
}