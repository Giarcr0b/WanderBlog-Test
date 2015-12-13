<?php
include("../../inc/connect.php");

$query = $db->query("SELECT * FROM adventure");

if($query->num_rows>0) {

    while ($row = $query->fetch_array()) {
        $rows[] = $row;
    }

    foreach($rows as $row){
        echo '<tr>'. '<td>' . $row['user_id'] . '</td>' . '<td>' . $row['adventure_id'] . '</td>' .'<td>'. $row['title'] .'</td>' . '<td>'. $row['country'] .'</td>' . '<td>'. $row['vote_score'] .'</td>' . '</tr>';
    }
}
else{
    echo '<h3>No Adventures Created</h3>';
}



