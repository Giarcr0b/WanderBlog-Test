<?php
include("../../inc/connect.php");



echo $selected;

$sql_query = "SELECT * FROM user";

$result = $db->query($sql_query);



while($row = $result->fetch_array()){

    echo "<td>".$row['name']."</td>";
}

$result->close();

$db->close();

?>