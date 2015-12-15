<?php
include("../../inc/connect.php");



$query = $db->query("SELECT * FROM user WHERE name = '$selected'");

while($row = $query->fetch_array()){

    echo "<td>".$row['user_name']."</td>";
}