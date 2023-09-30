<?php

$conn=new mysqli("localhost","root","","acme_30_september");
if($conn->connect_error){
    echo "Connection Failed";
    die;
}

?>