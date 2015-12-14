<?php
include("../../inc/connect.php");

$name = $_GET["query"];

$query = $db->query("SELECT name FROM user WHERE name = '$name'");

while($row = $query->fetch_array()){

    echo '<td>'.$row['name'].'</td>';
}