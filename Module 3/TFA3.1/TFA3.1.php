<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Activity 1 Part 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 10px;
        }
        table, th, td {
            border: 2px solid #555555;
        }
        th, td {
            padding: 15px;
            text-align: center;
            font-size: 14px;
        }
        th {
            background-color: #ffffff;
            font-weight: normal;
        }
        img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<?php
$students = [
    [
        "name" => "Zara Lopez", 
        "birthday" => "August 14, 2005", 
        "age" => "20",
        "contact" => "09123456781", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Liam Concepcion", 
        "birthday" => "January 22, 2005",
        "age" => "21",
        "contact" => "09123456782", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Abigail Santos", 
        "birthday" => "March 05, 2007", 
        "age" => "19",
        "contact" => "09123456783", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Ethan Reyes", 
        "birthday" => "November 12, 2003", 
        "age" => "22",
        "contact" => "09123456784", 
        "image" => "img_placeholder.jpg    "
    ],
    [
        "name" => "Chloe Bautista", 
        "birthday" => "May 30, 2005", 
        "age" => "20",
        "contact" => "09123456785", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Marcus Cruz", 
        "birthday" => "September 18, 2004", 
        "age" => "21",
        "contact" => "09123456786", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Sophia Aquino", 
        "birthday" => "July 09, 2005", 
        "age" => "20",
        "contact" => "09123456787", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Noah Mendoza", 
        "birthday" => "December 25, 2003", 
        "age" => "22",
        "contact" => "09123456788", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Olivia Castro", 
        "birthday" => "April 02, 2007", 
        "age" => "19",
        "contact" => "09123456789", 
        "image" => "img_placeholder.jpg"
    ],
    [
        "name" => "Daniel Garcia", 
        "birthday" => "February 14, 2005", 
        "age" => "21",
        "contact" => "09123456790", 
        "image" => "img_placeholder.jpg"
    ]
];

usort($students, function($itemA, $itemB) {
    return strcmp($itemA['name'], $itemB['name']);
});
?>

<table>
    <thead>
        <tr>
            <th>no.</th>
            <th>name</th>
            <th>Image</th>
            <th>age</th>
            <th>birthday</th>
            <th>contact number</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $counter = 1;
        foreach ($students as $student): 
        ?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><img src="<?php echo $student['image']; ?>" alt="Profile Picture"></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['birthday']; ?></td>
            <td><?php echo $student['contact']; ?></td>
        </tr>
        <?php 
        $counter++;
        endforeach; 
        ?>
    </tbody>
</table>

</body>
</html>