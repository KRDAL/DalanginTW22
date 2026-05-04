<!DOCTYPE html>
<html>
<head>
    <title>Student Grading System</title>
    <style>
        body { font-family: 'Arial'; background: #f0f2f5; display: flex; flex-direction: column; align-items: center; padding-top: 50px; }
        .form-box { background: white; padding: 20px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .result-container { border: 2px solid #7a9460; padding: 30px; background: white; display: flex; align-items: center; gap: 30px; width: 550px; border-radius: 5px; }
        .info-box { border: 1px solid #ddd; padding: 20px; text-align: center; flex: 1; border-radius: 4px; }
        .rank-text { font-size: 2rem; font-weight: bold; color: #2e7d32; display: block; }
        .name-banner { border: 1px solid #7a9460; padding: 10px 25px; background: #f9fbf7; margin-bottom: 15px; width: 550px; box-sizing: border-box; font-weight: bold; }
        .pic-placeholder { width: 120px; height: 120px; border: 1px dashed #ccc; display: flex; align-items: center; text-align: center; color: #999; background: #fafafa; }
    </style>
</head>
<body>

    <div class="form-box">
        <form method="POST">
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="number" name="grade" placeholder="Enter Grade (0-100)" required>
            <button type="submit">Generate Report</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['student_name']);
        $g = (int)$_POST['grade'];
        
        if ($g >= 93) $r = "A";
        elseif ($g >= 90) $r = "A-";
        elseif ($g >= 87) $r = "B+";
        elseif ($g >= 83) $r = "B";
        elseif ($g >= 80) $r = "B-";
        elseif ($g >= 77) $r = "C+";
        elseif ($g >= 73) $r = "C";
        elseif ($g >= 70) $r = "C-";
        elseif ($g >= 67) $r = "D+";
        elseif ($g >= 63) $r = "D";
        elseif ($g >= 60) $r = "D-";
        else $r = "F";
    ?>
        <div class="name-banner">Name: <?php echo $name; ?></div>
        <div class="result-container">
    <div class="info-box">Rank:<br><span class="rank-text"><?php echo $r; ?></span></div>
    <div class="info-box">Grade:<br><span class="rank-text" style="color:#333;"><?php echo $g; ?></span></div>
    <div class="info-box">
        <img src="Screenshot 2026-05-04 113857.png" alt="Student Picture" style="width: 120px; height: 120px; object-fit: cover; border-radius: 4px;">
    </div>
</div>
    <?php } ?>
</body>
</html>