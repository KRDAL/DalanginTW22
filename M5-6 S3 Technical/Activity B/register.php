<?php
include("config.php");

$message = "";

if(isset($_POST['register']))
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if($password != $confirm)
    {
        $message = "Password and Confirm Password are not the same.";
    }
    else
    {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users(firstname,middlename,lastname,birthday,email,contact,username,password)
                VALUES('$firstname','$middlename','$lastname','$birthday','$email','$contact','$username','$password')";

        if($conn->query($sql))
        {
            $message = "Registration Successful!";
        }
        else
        {
            $message = "Username already exists.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Registration</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h2>Registration Form</h2>

<form method="POST">

<label>First Name</label>
<input type="text" name="firstname" required>

<label>Middle Name</label>
<input type="text" name="middlename" required>

<label>Last Name</label>
<input type="text" name="lastname" required>

<label>Birthday</label>
<input type="date" name="birthday" required>

<label>Email</label>
<input type="email" name="email" required>

<label>Contact Number</label>
<input type="text" name="contact" required>

<label>Username</label>
<input type="text" name="username" required>

<label>Password</label>
<input type="password" name="password" required>

<label>Confirm Password</label>
<input type="password" name="confirm" required>

<input type="submit" name="register" value="Register">

</form>

<br>

<?php echo $message; ?>

<br>

<a href="login.php">Go to Login</a>

</div>

</body>
</html>