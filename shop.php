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

$conn =  new mysqli("localhost", "root", "", "shop");
$sql = "SELECT * FROM `menschen`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        // Hier wird einmal durch die gesamte Datenbank geloopt, 
        // Dabei ist das array $row eine Reihe mit dessen index man 
        // die gewünschten Daten aus der Datenbank bekommt 

        echo $row['id'] . "<br>";
    }
} else {
    echo "0 results";
}

?>