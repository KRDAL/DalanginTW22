<?php
$firstName = "KARLO";
$lastName = "DALANGIN";
$bio = "I am a dedicated BSIT student specializing in Web and Mobile Application development. 
   I am passionate about creating seamless user experiences and building responsive applications, 
   seeking an opportunity to apply my technical skills in a professional development environment.";

$email = "karlodalangin22@gmail.com";
$phone = "+63 939 189 6087";
$software_skills = [
    "Photo editing and digital illustration software",
    "Tracking & analytics tools",
    "Word processors"
];

$technical_skills = [
    "HTML & CSS",
    "PHP",
    "SQL Database",
    "C++",
    "UI Design",
];

$education = [
    ["school" => "FEU INSTITUTE OF TECHNOLOGY", "years" => "2024-PRESENT"],
    ["school" => "ST. AGNES ACADEMY, INC.", "years" => "2011-2024"],
    ["school" => "PIAMONT SCIENCE ORIENTED SCHOOL FOUNDATION, INC.", "years" => "2009-2010"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - <?php echo $firstName . " " . $lastName; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resume-container">
        <aside class="sidebar">
            <div class="profile-image-box">
                <img src="https://via.placeholder.com/300" alt="Profile Picture">
            </div>

            <section class="section">
                <h2 class="section-title">SKILLS</h2>
                <ul class="skills-list">
                    <?php foreach($software_skills as $s): ?>
                        <li><?php echo $s; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>

            <section class="section">
                <h2 class="section-title">EDUCATION</h2>
                <?php foreach($education as $edu): ?>
                    <div class="edu-item">
                        <p class="edu-school"><?php echo $edu['school']; ?></p>
                        <p class="edu-years">(<?php echo $edu['years']; ?>)</p>
                    </div>
                <?php endforeach; ?>
            </section>

            <section class="section">
                <h2 class="section-title">CONTACT</h2>
                <p class="contact-text"><?php echo $email; ?></p>
                <p class="contact-text"><?php echo $phone; ?></p>
            </section>
        </aside>

        <main class="main-content">
            <header class="name-header">
                <h1 class="first-name"><?php echo $firstName; ?></h1>
                <h1 class="last-name"><?php echo $lastName; ?></h1>
            </header>

            <section class="bio-section">
                <p><?php echo $bio; ?></p>
            </section>

            <section class="technical-skills">
                <h2 class="main-section-title">SKILLS</h2>
                <ul class="main-skills-list">
                    <?php foreach($technical_skills as $ts): ?>
                        <li>• <?php echo $ts; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>