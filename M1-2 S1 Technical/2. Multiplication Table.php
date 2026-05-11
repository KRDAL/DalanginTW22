<!DOCTYPE html>
<html>
<head>
    <title>Checkered Multiplication Table</title>
    <style>
        table { border-collapse: collapse; margin: 20px auto; }
        td { width: 40px; height: 40px; text-align: center; border: 1px solid #000; }
        .color1 { background-color: #ffffff; }
        .color2 { background-color: #d1d1d1; }
        .header { background-color: #444; color: #fff; font-weight: bold; }
    </style>
</head>
<body>

<h2 style="text-align:center;">Multiplication Table (0-10)</h2>

<table>
    <?php
    for ($row = 0; $row <= 10; $row++) {
        echo "<tr>";

        for ($col = 0; $col <= 10; $col++) {
            $cellClass = (($row + $col) % 2 == 0) ? 'color1' : 'color2';
            $product = $row * $col;
            
            echo "<td class='$cellClass'>$product</td>";
        }
        
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>