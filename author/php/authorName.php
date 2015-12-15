<?php
include("../../inc/connect.php");

$name = $_GET["query"];

$sql_query = "SELECT * FROM user WHERE name = '$name'";

$result = $db->query($sql_query);



while($row = $result->fetch_array()){

    echo "<td>".$row['name']."</td>";
}

$result->close();

$db->close();

?>