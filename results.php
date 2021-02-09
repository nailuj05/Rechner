<!DOCTYPE html>
<html lang="en">
<head>
    <title>Results</title>
    <link rel="stylesheet" href="include/css/results.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'include/page-elements/header.php'; ?>

    <div class="body">
        <h2 class="results">Deine Ergebnisse</h2>
    </div>
</body>
</html>

<?php
    if(isset($_GET['price'])){
        $gender = $_GET['price'];
        echo $gender; 
    }
?>