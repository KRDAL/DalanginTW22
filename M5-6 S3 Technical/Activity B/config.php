<?php

$host = "localhost";
$user = "root";
$pass = "root";
$db = "assessment3";
$port = 8889;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>