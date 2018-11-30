<?php
 

$host         = "localhost";
$username     = "root";

$password     = "";

$dbname       = "poll_db";
$result_array = array();
 
$conn = new mysqli($host, $username, $password, $dbname);
 
if ($conn->connect_error) {

     die("Connection to database failed: " . $conn->connect_error);
}


