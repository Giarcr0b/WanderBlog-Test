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
"bfc8c221283ae4",
"38b9c269",
"COSAWanderBlog"
);
//=================================================================================================
// test if connection was established, and print any errors
//=================================================================================================
if($db->connect_errno){
    die('Connectfailed['.$db->connect_error.']');
}
?>