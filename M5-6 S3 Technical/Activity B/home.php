<?php
session_start();
include("config.php");

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Welcome <?php echo $row['firstname']; ?></h2>

<table border="1" width="100%" cellpadding="10">

<tr>
<td>First Name</td>
<td><?php echo $row['firstname']; ?></td>
</tr>

<tr>
<td>Middle Name</td>
<td><?php echo $row['middlename']; ?></td>
</tr>

<tr>
<td>Last Name</td>
<td><?php echo $row['lastname']; ?></td>
</tr>

<tr>
<td>Birthday</td>
<td><?php echo $row['birthday']; ?></td>
</tr>

<tr>
<td>Email</td>
<td><?php echo $row['email']; ?></td>
</tr>

<tr>
<td>Contact</td>
<td><?php echo $row['contact']; ?></td>
</tr>

<tr>
<td>Username</td>
<td><?php echo $row['username']; ?></td>
</tr>

</table>

<br>

<a href="reset_password.php">Reset Password</a>

<br><br>

<a href="logout.php">Logout</a>

</div>

</body>
</html>