<?php

$result = "";

if(isset($_POST['submit']))
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

    if($password == $confirm)
    {
        $result = "
        <h3>Registration Details</h3>

        <p><strong>First Name:</strong> $firstname</p>

        <p><strong>Middle Name:</strong> $middlename</p>

        <p><strong>Last Name:</strong> $lastname</p>

        <p><strong>Birthday:</strong> $birthday</p>

        <p><strong>Email:</strong> $email</p>

        <p><strong>Contact Number:</strong> $contact</p>

        <p><strong>Username:</strong> $username</p>
        ";
    }
    else
    {
        $result = "<h3>Password and Confirm Password are not the same.</h3>";
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

<input type="submit" name="submit" value="Register">

</form>

<br>

<?php echo $result; ?>

<br>

<a href="login.php">Go to Login</a>

</div>

</body>
</html>