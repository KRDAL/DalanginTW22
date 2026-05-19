<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume of Shapes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px double #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .header-title {
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
if (!defined('M_PI')) {
    define('M_PI', 3.1415926535898);
}
function getCubeVolume($side) {
    return pow($side, 3);
}
function getRectPrismVolume($length, $width, $height) {
    return $length * $width * $height;
}
function getCylinderVolume($radius, $height) {
    return M_PI * pow($radius, 2) * $height;
}
function getConeVolume($radius, $height) {
    return (1/3) * M_PI * pow($radius, 2) * $height;
}
function getSphereVolume($radius) {
    return (4/3) * M_PI * pow($radius, 3);
}
?>

<table>
    <tr>
        <th colspan="3" class="header-title">Volume of Shapes</th>
    </tr>
    <tr>
        <th style="width: 33%;">Values</th>
        <th style="width: 34%;">Formula</th>
        <th style="width: 33%;">Answer</th>
    </tr>
    
    <tr>
        <td>s = 5</td>
        <td>V = s³</td>
        <td><?php echo getCubeVolume(5); ?></td>
    </tr>
    
    <tr>
        <td>l = 4, w = 5, h = 6</td>
        <td>V = l × w × h</td>
        <td><?php echo getRectPrismVolume(4, 5, 6); ?></td>
    </tr>
    
    <tr>
        <td>r = 3, h = 7</td>
        <td>V = π × r² × h</td>
        <td><?php echo round(getCylinderVolume(3, 7), 2); ?></td>
    </tr>
    
    <tr>
        <td>r = 3, h = 9</td>
        <td>V = ¹/₃ × π × r² × h</td>
        <td><?php echo round(getConeVolume(3, 9), 2); ?></td>
    </tr>
    
    <tr>
        <td>r = 4</td>
        <td>V = ⁴/₃ × π × r³</td>
        <td><?php echo round(getSphereVolume(4), 2); ?></td>
    </tr>
</table>
</body>
</html>