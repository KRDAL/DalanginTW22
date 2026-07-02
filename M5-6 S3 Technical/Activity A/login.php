<?php
session_start();

if(isset($_SESSION['username']))
{
    header("Location: home.php");
    exit();
}

$cookieUser = "";
$cookiePass = "";

if(isset($_COOKIE['username']))
{
    $cookieUser = $_COOKIE['username'];
}

if(isset($_COOKIE['password']))
{
    $cookiePass = $_COOKIE['password'];
}

$validUsername = "admin";
$validPassword = "12345";

$message = "";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == $validUsername && $password == $validPassword)
    {
        $_SESSION['username'] = $username;

        if(isset($_POST['remember']))
        {
            setcookie("username",$username,time()+86400,"/");
            setcookie("password",$password,time()+86400,"/");
        }
        else
        {
            setcookie("username","",time()-3600,"/");
            setcookie("password","",time()-3600,"/");
        }

        header("Location: home.php");
        exit();
    }
    else
    {
        $message = "Invalid Username or Password";
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

<input type="text" name="username" value="<?php echo $cookieUser; ?>" required>

<label>Password</label>

<input type="password" name="password" value="<?php echo $cookiePass; ?>" required>

<br><br>

<input type="checkbox" name="remember">

Remember Me

<br><br>

<input type="submit" name="login" value="Login">

</form>

<br>

<?php echo $message; ?>

<br>

<a href="register.php">Register Here</a>

</div>

</body>
</html>