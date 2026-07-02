<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

require_once "config.php";

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = $success_msg = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $new_password = trim($_POST["new_password"] ?? "");
    $confirm_password = trim($_POST["confirm_password"] ?? "");
    $regex_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

    $new_password_err = empty($new_password) ? "Please enter the new password." : 
        (!preg_match($regex_pattern, $new_password) ? "Password must be at least 8 characters long and contain 1 uppercase letter, 1 lowercase letter, 1 digit, and 1 special character symbol." : "");

    $confirm_password_err = empty($confirm_password) ? "Please confirm the password." : 
        (($new_password !== $confirm_password) ? "Password verification check does not match your entry." : "");

    if (empty($new_password_err) && empty($confirm_password_err)) {
        $sql = "UPDATE tbl_users SET password = ? WHERE id = ?";
        $stmt = mysqli_prepare($conn, $sql);
        
        if ($stmt) {
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "si", $param_password, $_SESSION["id"]);
            
            if (mysqli_stmt_execute($stmt)) {
                $success_msg = "Account authentication parameters successfully updated.";
            }
            mysqli_stmt_close($stmt);
        }
        
        $new_password_err = empty($success_msg) ? "Database transaction failed. Please try again later." : "";
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Parameters</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-container">
        <h2>Modify Credentials</h2>
        <p class="subtitle">Update security variables across database directories.</p>

        <?php if(!empty($success_msg)): ?>
            <div class="alert-success"><?php echo $success_msg; ?></div>
        <?php endif; ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>New System Password</label>
                <input type="password" name="new_password" class="form-control">
                <span class="error-msg"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Verify Password Entry</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="error-msg"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <button type="submit" class="btn-primary" style="background-color: #f59e0b;">Apply Structural Adjustments</button>
            </div>
            <a href="home.php" class="footer-link">← Cancel and Return to Dashboard</a>
        </form>
    </div>
</body>
</html>