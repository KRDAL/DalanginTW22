<?php
$modules = [
    'personal.php' => "<h3>Personal Information</h3><ul><li><strong>
    Full Name:</strong> Karlo Dalangin</li><li><strong>
    Email:</strong> karlodalangin22@gmail.com</li>
    <li><strong>Phone:</strong> +63 939 189 6087</li>
    </ul>",

    'objective.php' => "<h3>Career Objective</h3><p>I am a dedicated BSIT student specializing in Web and Mobile Application development. 
    I am passionate about creating seamless user experiences and building responsive applications, 
    seeking an opportunity to apply my technical skills in a professional development environment.</p>",
    
    'education.php' => "<h3>Educational Attainment</h3><ul>
    <li><strong>FEU INSTITUTE OF TECHNOLOGY</strong> (2024-PRESENT)</li>
    <li><strong>ST. AGNES ACADEMY, INC.</strong> (2011-2024)</li>
    <li><strong>PIAMONT SCIENCE ORIENTED SCHOOL FOUNDATION, INC.</strong> (2009-2010)</li>
    </ul>",
    
    'skills.php' => "<h3>Technical Skills</h3><ul><li>HTML & CSS</li>
    <li>PHP</li><li>SQL Database</li>
    <li>C++</li><li>UI Design</li>
    </ul>",

    'affiliation.php' => "<h3>Software & Tools</h3><ul>
    <li>Photo editing and digital illustration software</li>
    <li>Tracking & analytics tools</li><li>Word processors</li>
    </ul>",

    'experience.php' => "<h3>Experience</h3><p>Student Developer specializing in responsive web design and database integration, 
    currently focusing on building modular applications using PHP architecture.</p>"
];

foreach ($modules as $file => $content) {
    if (!file_exists($file)) {
        file_put_contents($file, $content);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume</title>
    <style>
        .resume-container { width: 800px; margin: 20px auto; font-family: Arial, sans-serif; background: #fff; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 10px; }
        td { border: 2px double #333; padding: 15px; vertical-align: top; }
        h3 { margin: 0 0 10px 0; border-bottom: 1px solid #ccc; padding-bottom: 5px; color: #333; }
        ul { margin: 0; padding-left: 20px; }
        .profile-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #333;
        }
        .avatar-cell { width: 150px; text-align: center; vertical-align: middle; }
    </style>
</head>
<body>

<div class="resume-container">
    <table>
        <tr>
            <td class="avatar-cell">
                <img src="IMG_2521.JPG" alt="Profile Picture" class="profile-img">
            </td>
            <td>
                <?php require('personal.php'); ?>
            </td>
        </tr>
    </table>

    <table>
        <tr><td><?php include('objective.php'); ?></td></tr>
        <tr><td><?php include('education.php'); ?></td></tr>
        <tr><td><?php include('skills.php'); ?></td></tr>
        <tr><td><?php include('affiliation.php'); ?></td></tr>
        <tr><td><?php include('experience.php'); ?></td></tr>
    </table>
</div>
</body>
</html>