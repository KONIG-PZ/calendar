<?php

$severname = "";
$username = "";
$password = "";
$database = "";

$conn = new mysqli($severname,$username,$password,$database);

if($conn->connect_error)
{
    die("connection error". $conn->connect_error);
}

?>