<?php
include("../../inc/connect.php");

$name = $_GET["query"];

$query = $db->query("SELECT * FROM user WHERE name = 'testacc'");

while($row = $query->fetch_array()){

    echo "<td>".$row['user_name']."</td>";
}