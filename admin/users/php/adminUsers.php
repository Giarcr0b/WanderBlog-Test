<?php
include("../../inc/connect.php");

$query = $db->query("SELECT * FROM user");

while($row = $query->fetch_array()){
    $rows[] = $row;
}

foreach($rows as $row){
    echo '<tr>' . '<td>' . '<a href="editUser.php?id=' . $row['user_id'].'"' . '>Edit</a>'  . '<td>' . $row['user_id'] . '</td>' .'<td>'. $row['user_name'] .'</td>' . '<td>'. $row['name'] .'</td>';

        //=================================================================================================
        //check if the user is an author and display either "Yes" or "No"
        //=================================================================================================
        echo '<td>';

        if($row['is_author'] == 0){
            echo "No";
        }
        else{
            echo "Yes";
        }
        echo '</td>';

        //=================================================================================================
        //check if the user is an admin and display either "Yes" or "No"
        //=================================================================================================
        echo '<td>';

        if($row['is_admin'] == 0){
            echo "No";
        }
        else{
            echo "Yes";
        }
        echo '</td>';

        //=================================================================================================
        //check if the user is verified and display either "Yes" or "No"
        //=================================================================================================
        echo '<td>';

        if($row['is_verified'] == 0){
            echo "No";
        }
        else{
            echo "Yes";
        }
        echo '</td>';

        echo '</tr>'; //End of row
}


