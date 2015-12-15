<?php
include("../../inc/connect.php");

$name = $_GET["query"];

echo $name;

$sql_query = "SELECT * FROM user";

$result = $db->query($sql_query);



while($row = $result->fetch_array()){

    echo "<td>".$row['name']."</td>";
}

$result->close();

$db->close();

?>