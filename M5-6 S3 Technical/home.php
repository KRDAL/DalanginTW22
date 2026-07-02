<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <div style="background-color: #e0e7ff; display: inline-block; padding: 12px; border-radius: 50%; margin-bottom: 20px;">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        </div>
        <h1>Welcome, User!</h1>
        <p class="subtitle" style="font-size: 16px;">Active Identity Profile: <strong style="color: #1e293b;"><?php echo htmlspecialchars($_SESSION["username"]); ?></strong></p>
        <p style="color: #64748b; font-size: 14px; line-height: 1.6; max-width: 440px; margin: 0 auto;">You have securely loaded into the workspace portal database. State sessions are actively monitored.</p>
        
        <div class="button-group">
            <a href="reset_password.php" class="btn-action btn-warning">Modify Password</a>
            <a href="logout.php" class="btn-action btn-danger">Terminate Session</a>
        </div>
    </div>
</body>
</html>