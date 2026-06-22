<?php
include 'db_connect.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $stmt = $conn->prepare("INSERT INTO tblDog (name, breed, age, address, color, height, weight) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissss", $name, $breed, $age, $address, $color, $height, $weight);

    if ($stmt->execute()) {
        $message = "<div class='alert success'>Dog information saved successfully to the database!</div>";
    } else {
        $message = "<div class='alert error'>Error saving entry: " . $conn->error . "</div>";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Information Register</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; margin: 40px; }
        .form-container { max-width: 500px; background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); margin: auto; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        label { font-weight: bold; display: block; margin-top: 12px; color: #555; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { width: 100%; padding: 10px; background-color: #28a745; border: none; color: white; font-size: 16px; font-weight: bold; border-radius: 4px; margin-top: 25px; cursor: pointer; }
        button:hover { background-color: #218838; }
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 4px; text-align: center; font-weight: bold; }
        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }
        .nav-link { display: block; text-align: center; margin-top: 15px; color: #007bff; text-decoration: none; font-weight: bold; }
        .nav-link:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Dog Information Register</h2>
    <?php echo $message; ?>
    
    <form method="POST" action="DogRegister.php">
        <label>Dog Name:</label>
        <input type="text" name="name" required>

        <label>Breed:</label>
        <input type="text" name="breed" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <label>Color:</label>
        <input type="text" name="color" required>

        <label>Height (e.g., 24 inches):</label>
        <input type="text" name="height" required>

        <label>Weight (e.g., 30 kg):</label>
        <input type="text" name="weight" required>

        <button type="submit">Save Dog Info</button>
    </form>
    
    <a class="nav-link" href="DogView.php">View All Registered Dogs →</a>
</div>

</body>
</html>