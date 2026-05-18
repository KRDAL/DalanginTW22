<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 2 Part2</title>
    <style>
        .math-table {
            border-collapse: collapse;
            width: 50%;
            font-family: Arial, sans-serif;
 
            margin: 20px auto;
        }
        .math-table, .math-table td {
            border: 2px solid #555555;
        }
        .math-table td {
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
$dataset = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$sumResult = array_sum($dataset);

$subResult = $dataset[0];
$mulResult = $dataset[0];
$divResult = $dataset[0];

for ($i = 1; $i < count($dataset); $i++) {
    $subResult -= $dataset[$i];
    $mulResult *= $dataset[$i];
    if ($dataset[$i] != 0) {
        $divResult /= $dataset[$i];
    }
}
?>

<table class="math-table">
    <tr>
        <td colspan="2" class="header-bg">
            Array list: <?php echo implode(', ', $dataset); ?>
        </td>
    </tr>
    <tr>
        <td class="operation-label">Addition</td>
        <td><?php echo $sumResult; ?></td>
    </tr>
    <tr>
        <td class="operation-label">Subtraction</td>
        <td><?php echo $subResult; ?></td>
    </tr>
    <tr>
        <td class="operation-label">Multiplication</td>
        <td><?php echo $mulResult; ?></td>
    </tr>
    <tr>
        <td class="operation-label">Division</td>
        <td><?php echo $divResult; ?></td>
    </tr>
</table>

</body>
</html>