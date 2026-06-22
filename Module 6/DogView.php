<?php
include 'db_connect.php';
$sql = "SELECT * FROM tblDog";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Records Database View</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 40px; }
        .table-container { max-width: 950px; margin: auto; background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #007bff; color: white; }
        tr:hover { background-color: #f5f5f5; }
        .btn-back { display: inline-block; padding: 8px 15px; background-color: #6c757d; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; margin-bottom: 10px; }
        .btn-back:hover { background-color: #5a6268; }
    </style>
</head>
<body>

<div class="table-container">
    <h2>Registered Dog Database Records</h2>
    <a href="DogRegister.php" class="btn-back">← Register New Dog</a>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Address</th>
            <th>Color</th>
            <th>Height</th>
            <th>Weight</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['breed']) . "</td>";
                echo "<td>" . htmlspecialchars($row['age']) . " Yrs</td>";
                echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                echo "<td>" . htmlspecialchars($row['color']) . "</td>";
                echo "<td>" . htmlspecialchars($row['height']) . "</td>";
                echo "<td>" . htmlspecialchars($row['weight']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8' style='text-align:center; font-weight:bold;'>No registered logs discovered in the server tables.</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</div>

</body>
</html>f