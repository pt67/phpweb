<?php

$servername = "localhost";
$username = "sammy";
$password = "12345";
$dbname = "whate";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($con ->connect_error){
die("connection failed: ". $conn->connect_error);

}

?>