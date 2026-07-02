<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
}

require_once "config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");

    $username_err = empty($username) ? "Please enter a username." : 
        (!preg_match('/^[A-Za-z0-9_]{5,15}$/', $username) ? "Username must be 5-15 characters long and contain only alphanumeric values or underscores." : "");

    $password_err = empty($password) ? "Please enter your password." : "";

    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, username, password FROM tbl_users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                
                if (mysqli_stmt_num_rows($stmt) === 1) {
                    mysqli_stmt_bind_result($stmt, $id, $db_username, $hashed_password);
                    mysqli_stmt_fetch($stmt);
                    
                    if (password_verify($password, $hashed_password)) {
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $db_username;
                        
                        header("location: home.php");
                        exit;
                    }
                }
            }
            mysqli_stmt_close($stmt);
        }
        $login_err = "Invalid username or password.";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-container">
        <h2>Welcome Back</h2>
        <p class="subtitle">Please enter your system privileges to authenticate.</p>

        <?php if(!empty($login_err)): ?>
            <div class="alert-danger"><?php echo $login_err; ?></div>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>" autocomplete="off">
                <span class="error-msg"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="error-msg"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <button type="submit" class="btn-primary">Sign In</button>
            </div>
            <a href="register.php" class="footer-link">Don't have an account? Register here</a>
        </form>
    </div>
</body>
</html>