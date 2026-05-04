<!DOCTYPE html>
<html>
<head>
    <style>
        .container { border: 2px solid #7a9460; padding: 20px; display: flex; align-items: center; gap: 20px; width: 500px; }
        .box { border: 1px solid #000; padding: 15px; text-align: center; min-width: 80px; }
        .name-tag { border: 1px solid #000; padding: 5px 20px; margin-bottom: 10px; display: inline-block; }
    </style>
</head>
<body>
    <?php
    $studentName = "First Name MI. Lastname";
    $grade = 95;
    $rank = "";

    if ($grade >= 93) { $rank = "A"; }
    elseif ($grade >= 90) { $rank = "A-"; }
    elseif ($grade >= 87) { $rank = "B+"; }
    elseif ($grade >= 83) { $rank = "B"; }
    elseif ($grade >= 80) { $rank = "B-"; }
    elseif ($grade >= 77) { $rank = "C+"; }
    elseif ($grade >= 73) { $rank = "C"; }
    elseif ($grade >= 70) { $rank = "C-"; }
    elseif ($grade >= 67) { $rank = "D+"; }
    elseif ($grade >= 63) { $rank = "D"; }
    elseif ($grade >= 60) { $rank = "D-"; }
    else { $rank = "F"; }
    ?>

    <div class="name-tag">Name: <?php echo $studentName; ?></div>
    <div class="container">
        <div class="box">Rank:<br><strong><?php echo $rank; ?></strong></div>
        <div class="box">Grade:<br><strong><?php echo $grade; ?></strong></div>
        <div class="box" style="height: 80px; width: 80px;">Picture</div>
    </div>
</body>
</html>