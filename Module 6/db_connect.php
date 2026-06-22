<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$dbname = "DBDog";
$port = 8889;   

$conn = new mysqli($servername, $username, $password, $dbname, $port);
if ($conn->connect_error) {
    die("Connection status failure: " . $conn->connect_error);
}
?>