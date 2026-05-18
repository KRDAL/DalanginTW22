<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Module 4 Part 2</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background-color: #fafafa; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 10px; }
        th, td { border: 1px solid #444; padding: 12px; text-align: center; }
        th { background-color: #f2f2f2; font-weight: bold; }
        .main-header { font-size: 1.4em; background-color: #fff; }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th colspan="6" class="main-header">List of names</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a"</th>
            <th>Reverse name</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $names = [
            "allayssa", "karlo", "steven", "lavi", "mikaella", 
            "shawn", "james", "gabriel", "ashley", "andrei", 
            "bonn", "fhilip", "joshua", "ronald", "benedict", 
            "Archiel", "Kuristin", "bryan", "oliver", "katherine"
        ];

        foreach ($names as $name) {

            $charCount = strlen($name);

            $upperFirst = ucfirst($name);

            $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
            $replacedVowels = str_replace($vowels, '@', $name);

            $posA = stripos($name, 'a');
            if ($posA === false) {
                $posDisplay = "Not Found";
            } else {
                $posDisplay = $posA; 
            }

            $reversedName = strrev($name);

            echo "<tr>";
            echo "<td>{$name}</td>";
            echo "<td>{$charCount}</td>";
            echo "<td>{$upperFirst}</td>";
            echo "<td>{$replacedVowels}</td>";
            echo "<td>{$posDisplay}</td>";
            echo "<td>{$reversedName}</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
</body>
</html>
