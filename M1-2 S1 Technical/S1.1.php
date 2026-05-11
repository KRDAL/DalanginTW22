<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detailed Student Registration</title>
    <style>
        body { font-family: 'Courier New', Courier, monospace; background-color: #f0f0f0; padding: 30px; }
        .form-output { background: #fff; max-width: 800px; margin: auto; padding: 40px; border: 2px solid #333; box-shadow: 10px 10px 0px #888; }
        .section-title { background: #333; color: #fff; padding: 5px 10px; margin-top: 20px; text-transform: uppercase; }
        .row { display: flex; border-bottom: 1px solid #ddd; padding: 8px 0; }
        .value { color: #000; flex-grow: 1; }
    </style>
</head>
<body>

<div class="form-output">
    <h1 style="text-align:center; margin-bottom:0;">STUDENT REGISTRATION FORM</h1>
    <hr>
    
    <?php
    $studentNumber = "1234567";
    $firstName     = "Joshua";
    $lastName      = "Morales";
    $gender        = "Male";
    $age           = 21;
    $birthDate     = "May 12, 2005";
    $email         = "JOSHUA.MORALES@UNIVERSITY.EDU.PH";
    $address       = "742 Evergreen Terrace, Manila";
    $course        = "BSITWMA";
    $yearLevel     = 2;
    $isExpelled    = "No";

    $fullNameFormatted = strtoupper($lastName) . ", " . ucwords(strtolower($firstName));
    $emailLower        = strtolower($email);
    $courseShort       = (strlen($course) > 10) ? "BSIT" : $course;

    echo "<div class='section-title'>I. Personal Identity</div>";
    echo "<div class='row'><span class='label'>Student Number:</span><span class='value'>$studentNumber</span></div>";
    echo "<div class='row'><span class='label'>Full Legal Name:</span><span class='value'>$fullNameFormatted</span></div>";
    echo "<div class='row'><span class='label'>Age / Gender:</span><span class='value'>$age / $gender</span></div>";
    echo "<div class='row'><span class='label'>Date of Birth:</span><span class='value'>$birthDate</span></div>";

    echo "<div class='section-title'>II. Academic & Background</div>";
    echo "<div class='row'><span class='label'>Email Address:</span><span class='value'>$emailLower</span></div>";
    echo "<div class='row'><span class='label'>Residential Address:</span><span class='value'>$address</span></div>";
    echo "<div class='row'><span class='label'>Program / Year:</span><span class='value'>$courseShort - Year $yearLevel</span></div>";
    echo "<div class='row'><span class='label'>Expulsion History:</span><span class='value'>$isExpelled</span></div>";
    ?>
</div>

</body>
</html>