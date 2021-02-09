<!DOCTYPE html>
<html>

<head>
    <title>Rechner</title>
    <link rel="stylesheet" href="include/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h1 class="headline">Very nice Rechner</h1>
    </div>

    <div class="input">
        <div class="slidecontainer">
            <label for="age">Alter: <span id="age-output"></span></label>
            <input type="range" min="1" max="100" value="50" class="slider" id="age-slider">
        </div>

        <div class="slidecontainer">
            <label for="height">Größe: <span id="height-output"></span></label>
            <input type="range" min="1" max="100" value="50" class="slider" id="height-slider">
        </div>
    </div>

    <script src="include/js/app.js"></script>

</html>

</body>

<?php
#test
if (isset($_POST['submit'])) {
    $Alter = $_POST['Alter'];
    echo $Alter;
}


?>