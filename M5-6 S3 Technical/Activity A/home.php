<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Home Page</h2>

<h3>Welcome <?php echo $username; ?></h3>

<p>You have successfully logged in.</p>

<a href="logout.php">Logout</a>

</div>

</body>
</html>