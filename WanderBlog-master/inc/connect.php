<?php
//=================================================================================================
// connection to Azure server and select database
//=================================================================================================
$db = new mysqli(
//"localhost",
//"root",
//"",
//"COSAWanderBlog"
"eu-cdbr-azure-north-d.cloudapp.net",
"b3db0ca6efa7a5",
"eb1ce59a",
"DataBase_1109847"
);
//=================================================================================================
// test if connection was established, and print any errors
//=================================================================================================
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}
?>