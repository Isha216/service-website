<?php

// file to set connection
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "servicewebsite";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    die("connection failed: ". $conn->connect_error  );
}
?>