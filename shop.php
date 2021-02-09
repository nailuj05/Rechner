<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop</title>
    <link rel="stylesheet" href="include/css/results.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <?php include 'include/page-elements/header.php'; ?>

    <div class="headeline">
        <h1>Shop: </h1>
    </div>
</body>

</html>

<?php

$conn =  new mysqli("localhost", "root", "", 'shop');
$sql = "SELECT * FROM `menschen`";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"] . " - Alter: " . $row["age"] . " Größe: " . $row["height"] . "<br>";

    for ($i = 0; $i <= mysqli_fetch_lengths($row); $i++) {
        echo $row[$i];
    }
}

?>