<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fruits</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 2px double #333;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
            font-weight: bold;
        }
        .header-title {
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
        img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
        .center-text {
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$fruits = [
    [
        "name" => "Banana",
        "image" => "Bananas.jpg",
        "description" => "Color Yellow",
        "facts" => "Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber."
    ],
    [
        "name" => "Apple",
        "image" => "apples.webp",
        "description" => "Color Red or Green",
        "facts" => "Apples are high in fiber and vitamin C, and they are incredibly crisp and refreshing to eat."
    ],
    [
        "name" => "Grapes",
        "image" => "grapes.webp",
        "description" => "Color Purple or Green",
        "facts" => "Grapes have been cultivated for thousands of years and are used extensively to make wine and raisins."
    ],
    [
        "name" => "Orange",
        "image" => "orange.webp",
        "description" => "Color Orange",
        "facts" => "Oranges are widely known for their high vitamin C content and sweet, citrusy flavor profiles."
    ],
    [
        "name" => "Mango",
        "image" => "mango.jpg",
        "description" => "Color Yellow/Orange",
        "facts" => "Known as the king of fruits in some cultures, mangoes are incredibly rich, sweet, and juicy."
    ],
    [
        "name" => "Strawberry",
        "image" => "strawberry.jpg",
        "description" => "Color Bright Red",
        "facts" => "Strawberries are the only fruit that wear their seeds explicitly on the outside of their skin."
    ],
    [
        "name" => "Pineapple",
        "image" => "Pineapple.jpg",
        "description" => "Color Spiky Yellow",
        "facts" => "A single pineapple plant takes almost three years to grow and mature a single fruit."
    ],
    [
        "name" => "Watermelon",
        "image" => "watermelon.jpg",
        "description" => "Color Green Striped",
        "facts" => "Watermelons are roughly 92% water, making them remarkably hydrating during hot summer days."
    ],
    [
        "name" => "Blueberry",
        "image" => "blueberry.webp",
        "description" => "Color Deep Blue",
        "facts" => "Blueberries protect against oxidative stress and are highly revered as an exceptional antioxidant superfood."
    ],
    [
        "name" => "Peach",
        "image" => "peach.jpg",
        "description" => "Color Fuzzy Pink-Orange",
        "facts" => "Peaches are members of the rose family and are close relatives of almonds and plums."
    ]
];
usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<table>
    <tr>
        <th colspan="4" class="header-title">My Fruits</th>
    </tr>
    <tr>
        <th style="width: 15%;">Image</th>
        <th style="width: 15%;">Name</th>
        <th style="width: 20%;">Description</th>
        <th style="width: 50%;">Facts</th>
    </tr>
    <?php foreach ($fruits as $fruit): ?>
    <tr>
        <td><img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>"></td>
        <td class="center-text"><?php echo $fruit['name']; ?></td>
        <td class="center-text"><?php echo $fruit['description']; ?></td>
        <td><?php echo $fruit['facts']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>