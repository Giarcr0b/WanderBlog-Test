<?php
include("../../inc/connect.php");

$query = $db->query("SELECT * FROM adventure,user WHERE adventure.user_id = user.user_id");

if($query->num_rows>0) {

    while ($row = $query->fetch_array()) {
        $rows[] = $row;
    }

    foreach($rows as $row){
        echo '<tr>'
            . '<td>' . '<a href="editAdventure.php?id=' . $row['adventure_id'].'"' . '>Edit</a></td>'
            . '<td>' . $row['adventure_id'] . '</td>' .'<td>'
            . $row['title'] .'</td>'
            . '<td>'. $row['country'] .'</td>'
            . '<td>'. $row['vote_score'] .'</td>'
            . '<td>' . $row['user_id'] . '</td>'
            . '<td>' . $row['user_name'] . '</td>'
            .'</tr>';
    }
}
else{
    echo '<h3>No Adventures Created</h3>';
}



