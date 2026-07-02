<?php
session_start();
include("config.php");

if(isset($_SESSION['username']))
{
    header("Location: home.php");
    exit();
}

$message = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        $row = $result->fetch_assoc();

        if(password_verify($password, $row['password']))
        {
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];

            header("Location: home.php");
            exit();
        }
        else
        {
            $message = "Invalid Username or Password.";
        }
    }
    else
    {
        $message = "Invalid Username or Password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Login</h2>

<form method="POST">

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<input type="submit" name="login" value="Login">

</form>

<br>

<?php echo $message; ?>

<br>

<a href="register.php">Register Here</a>

</div>

</body>
</html>