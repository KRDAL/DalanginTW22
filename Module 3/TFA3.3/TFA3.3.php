<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 3 part 3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            font-family: Arial, sans-serif;
            margin: 20px auto;
        }
        table, td {
            border: 2px solid #555555;
        }
        td {
            padding: 12px;
            text-align: center;
        }
        .header-bg {
            background-color: #ffffff;
            font-weight: normal;
        }
        .operation-label {
            width: 40%;
            text-align: left;
            padding-left: 20px;
            background-color: #ffffff;
        }
    </style>
</head>
<body>

<?php
function evaluateThreeParameters($param1, $param2, $param3) {
    // Perform operations
    $addition       = $param1 + $param2 + $param3;
    $subtraction    = $param1 - $param2 - $param3;
    $multiplication = $param1 * $param2 * $param3;

    if ($param2 != 0 && $param3 != 0) {
        $division = $param1 / $param2 / $param3;
    } else {
        $division = "Undefined (Division by Zero)";
    }
    echo "<table>";
    echo "<tr><td colspan='2' class='header-bg'>My Parameter values: $param1, $param2, $param3</td></tr>";
    echo "<tr><td class='operation-label'>Addition</td><td>$addition</td></tr>";
    echo "<tr><td class='operation-label'>Subtraction</td><td>$subtraction</td></tr>";
    echo "<tr><td class='operation-label'>Multiplication</td><td>$multiplication</td></tr>";
    echo "<tr><td class='operation-label'>Division</td><td>$division</td></tr>";
    echo "</table>";
}
evaluateThreeParameters(25, 13, 6);
?>

</body>
</html>