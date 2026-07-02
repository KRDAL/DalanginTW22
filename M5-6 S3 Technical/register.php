<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
}

require_once "config.php";

$first_name = $middle_name = $last_name = $username = $password = $confirm_password = $birthday = $email = $contact_number = "";
$first_name_err = $middle_name_err = $last_name_err = $username_err = $password_err = $confirm_password_err = $birthday_err = $email_err = $contact_number_err = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = trim($_POST["first_name"] ?? "");
    $middle_name = trim($_POST["middle_name"] ?? "");
    $last_name = trim($_POST["last_name"] ?? "");
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? "");
    $confirm_password = trim($_POST["confirm_password"] ?? "");
    $birthday = trim($_POST["birthday"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $contact_number = trim($_POST["contact_number"] ?? "");

    $first_name_err = empty($first_name) ? "Please enter your first name." : "";
    $last_name_err = empty($last_name) ? "Please enter your last name." : "";
    $birthday_err = empty($birthday) ? "Please enter your birthday." : "";
    $email_err = empty($email) ? "Please enter your email." : "";
    $contact_number_err = empty($contact_number) ? "Please enter your contact number." : "";

    $username_err = empty($username) ? "Please enter a username." : 
        (!preg_match('/^[A-Za-z0-9_]{5,15}$/', $username) ? "Username must be 5-15 characters long and contain only alphanumeric values or underscores." : "");

    if (empty($username_err)) {
        $sql = "SELECT id FROM tbl_users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                $username_err = (mysqli_stmt_num_rows($stmt) === 1) ? "This username is already taken." : "";
            }
            mysqli_stmt_close($stmt);
        }
    }

    $password_regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
    $password_err = empty($password) ? "Please enter a password." : 
        (!preg_match($password_regex, $password) ? "Password must be at least 8 characters long and contain 1 uppercase letter, 1 lowercase letter, 1 digit, and 1 special character." : "");

    $confirm_password_err = empty($confirm_password) ? "Please confirm your password." : 
        (($password !== $confirm_password) ? "Password verification check does not match your entry." : "");

    if (empty($first_name_err) && empty($last_name_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($birthday_err) && empty($email_err) && empty($contact_number_err)) {
        $sql = "INSERT INTO tbl_users (username, password, first_name, middle_name, last_name, birthday, email, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssssssss", $username, $hashed_password, $first_name, $middle_name, $last_name, $birthday, $email, $contact_number);
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
                exit;
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="auth-container" style="max-width: 500px; margin: 40px auto;">
        <h2>Create an Account</h2>
        <p class="subtitle">Please fill in this form to register infrastructure access variables.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo htmlspecialchars($first_name); ?>">
                <span class="error-msg"><?php echo $first_name_err; ?></span>
            </div>
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" name="middle_name" class="form-control" value="<?php echo htmlspecialchars($middle_name); ?>">
                <span class="error-msg"><?php echo $middle_name_err; ?></span>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo htmlspecialchars($last_name); ?>">
                <span class="error-msg"><?php echo $last_name_err; ?></span>
            </div>
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
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="error-msg"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Birthday</label>
                <input type="text" name="birthday" class="form-control" placeholder="e.g., January 30 1993" value="<?php echo htmlspecialchars($birthday); ?>">
                <span class="error-msg"><?php echo $birthday_err; ?></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                <span class="error-msg"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" name="contact_number" class="form-control" value="<?php echo htmlspecialchars($contact_number); ?>">
                <span class="error-msg"><?php echo $contact_number_err; ?></span>
            </div>
            <div class="form-group" style="margin-top: 30px;">
                <button type="submit" class="btn-primary">Submit Registration</button>
            </div>
            <a href="login.php" class="footer-link">Already have an account? Sign In here</a>
        </form>
    </div>
</body>
</html>