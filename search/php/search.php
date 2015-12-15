<?php

include("../../inc/connect.php");

if(!empty($_POST['search'])){

    $search = $_POST['search'];
    $searchType = $_POST['searchType'];

    switch($searchType){
        case "both":

            $from = "user";
            $where = "user_name LIKE '%$search%' AND is_author='1'";
            printAuthors(makeQuery($db,$from,$where));

            $from = "user,adventure";
            $where = "adventure.user_id = user.user_id AND title LIKE '%$search%'";
            printAdventures(makeQuery($db,$from,$where));

            break;
        case "adventures":
            $from = "user,adventure";
            $where = "adventure.user_id = user.user_id AND title LIKE '%$search%'";
            printAdventures(makeQuery($db,$from,$where));
            break;

        case "authors":
            $from = "user";
            $where = "user_name LIKE '%$search%' AND is_author='1'";
            printAuthors(makeQuery($db,$from,$where));
            break;

    }
}
else{
    echo '<div class="row">
                        <div class="large-10 columns">
                            <h5><strong>Search Empty</strong></h5>
                        </div>
                    </div>
                    <hr>';

}

function makeQuery($db,$from,$where){

    global $numRows;

    $query = $db->query("SELECT * FROM $from WHERE $where");

    if($query->num_rows > 0) { //if there is one row that matches the searched query
        while($row = $query->fetch_array()){
            $rows[] = $row;
        }
        return $rows;
    }
    $numRows += $query->num_rows;

}

function printAdventures($rows){

    if(!empty($rows)) {
        foreach ($rows as $row) {
            echo '<div class="row">
                        <div class="large-10 columns">
                            <h5><strong>' . $row['title'] .'</strong></h5>
                            <p>'. $row['body'] .'</p>
                            <p>by ' . $row['user_name'] . '</p>
                        </div>
                    </div>
                    <hr>';
        }
    }
    else {
        echo "em";
    }
}

function printAuthors($rows){
    if(!empty($rows)){
        foreach ($rows as $row) {
            echo '<div class="row">
                    <div class="large-2 columns small-3"><img src="http://placehold.it/80x80&amp;text=[img]"></div>
                    <div class="large-10 columns">
                        <h5><strong>' . $row['user_name'] .'</strong></h5>
                    </div>
                 </div>
                 <hr>';
        }
    }
}




