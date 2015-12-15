<?php
include("../../inc/connect.php");



$sql_query = "SELECT * FROM user WHERE name = '$selected'";

$result = $db->query($sql_query);



while($row = $result->fetch_array()){

    echo "<td>".$row['name']."</td>";
}

$result->close();

$db->close();

?>