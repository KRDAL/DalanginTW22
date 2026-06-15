<!DOCTYPE html>
<html>
<head>
    <title>Personal Info</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        First Name: <input type="text" name="fname"><br>
        Middle Name: <input type="text" name="mname"><br>
        Last Name: <input type="text" name="lname"><br>
        Date of Birth: <input type="text" name="dob"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "First Name: " . $_POST['fname'] . "<br>";
        echo "Middle Name: " . $_POST['mname'] . "<br>";
        echo "Last Name: " . $_POST['lname'] . "<br>";
        echo "Date of Birth: " . $_POST['dob'] . "<br>";
        echo "Address: " . $_POST['address'] . "<br>";
    }
    ?>
</body>
</html>