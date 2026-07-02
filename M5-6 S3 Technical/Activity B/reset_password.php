<?php
session_start();
include("config.php");

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

$message = "";

if(isset($_POST['reset']))
{
    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!password_verify($current, $row['password']))
    {
        $message = "Current password is not the same with the old password.";
    }
    else
    {
        if($new != $confirm)
        {
            $message = "New password and Re-Enter new password should be the same.";
        }
        else
        {
            $password = password_hash($new, PASSWORD_DEFAULT);

            $update = "UPDATE users SET password='$password' WHERE id='$id'";

            if($conn->query($update))
            {
                $message = "Password successfully updated.";
            }
            else
            {
                $message = "Password update failed.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h2>Reset Password</h2>

<form method="POST">

<label>Current Password</label>
<input type="password" name="current" required>

<label>New Password</label>
<input type="password" name="new" required>

<label>Re-Enter New Password</label>
<input type="password" name="confirm" required>

<input type="submit" name="reset" value="Reset Password">

</form>

<br>

<?php echo $message; ?>

<br>

<a href="home.php">Back to Home</a>

</div>

</body>
</html>