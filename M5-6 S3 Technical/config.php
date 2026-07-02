<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root'); 
define('DB_NAME', 'sa3_db');
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die("ERROR: Could not connect to the database. " . mysqli_connect_error());
}
?>