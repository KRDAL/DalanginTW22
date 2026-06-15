<?php
setcookie("fname", "Tony", time() + 10, "/");
setcookie("mname", "Thor", time() + 20, "/");
setcookie("lname", "Natasha", time() + 30, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cookie Tester</title>
</head>
<body>
    <h3>Cookies is Set!</h3>
    <p>Refresh this page to see the cookies expire after 10, 20, and 30 seconds.</p>
    <?php
    echo "First Name (10s): " . (isset($_COOKIE['fname']) ? $_COOKIE['fname'] : "Expired!") . "<br>";
    echo "Middle Name (20s): " . (isset($_COOKIE['mname']) ? $_COOKIE['mname'] : "Expired!") . "<br>";
    echo "Last Name (30s): " . (isset($_COOKIE['lname']) ? $_COOKIE['lname'] : "Expired!") . "<br>";
    ?>
</body>
</html>