<!DOCTYPE html>
<html>
<head>
    <title>Personal Info</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        First Name: <input type="text" name="fname"><br>
        Middle Name: <input type="text" name="mname"><br>
        Last Name: <input type="text" name="lname"><br>
        Date of Birth: <input type="text" name="dob"><br>
        Address: <input type="text" name="address"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php
    if (isset($_GET['submit'])) {
        echo "First Name: " . $_GET['fname'] . "<br>";
        echo "Middle Name: " . $_GET['mname'] . "<br>";
        echo "Last Name: " . $_GET['lname'] . "<br>";
        echo "Date of Birth: " . $_GET['dob'] . "<br>";
        echo "Address: " . $_GET['address'] . "<br>";
    }
    ?>
</body>
</html>