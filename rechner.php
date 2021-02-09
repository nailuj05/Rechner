<!DOCTYPE html>
<html>

<head>
    <title>Rechner</title>
    <link rel="stylesheet" href="include/css/rechner.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'include/page-elements/header.php'; ?>

    <form class="inputs" method="POST">

        <div class="input">
            <label for="age">Alter: <span id="age-output"></span></label>
            <input name="age" type="range" min="1" max="100" value="50" class="slider" id="age-slider">
        </div>

        <div class="input">
            <label for="height">Größe: <span id="height-output"></span></label>
            <input name="height" type="range" min="1" max="300" value="50" class="slider" id="height-slider">
        </div>

        <div class="input">
            <label for="hair-color">Haarfarbe</label>
            <input name="hairColor" type="color" id="hair-color" value="#ffffff">
        </div>

        <div class="input">
            <label for="hair-length">Haarlänge: <span id="hair-length-output"></span></label>
            <input name="hairLength" type="range" min="0" max="300" value="50" class="slider" id="hair-length-slider">
        </div>

        <!-- Genderbasierte Fallunterscheidung der Geschlechtsfunktionen -->

        <?php
        if (isset($_GET['gender'])) {
            $gender = $_GET['gender'];

            if ($gender == "woman") {
                // echo "woman";
                echo "
                        <div class='input'>
                            <label for='gender-size'>Brustumfang: <span id='gender-size-output'></span></label>

                    ";
            }

            if ($gender == "man") {
                echo "
                    <div class='input'>
                        <label for='gender-size'>Penisgröße: <span id='gender-size-output'></span></label>

                ";
            }

            if ($gender == "helicopter") {
                echo "
                    <div class='input'>
                        <label for='gender-size'>Kaliber in cm: <span id='gender-size-output'></span></label>
                    ";
            }

            echo "
                <input name='genderValue' type='range' min='0' max='60' value='50' class='slider' id='gender-size-slider'>

                </div>
                ";
        } else {
            echo "Undefiniertes Geschlecht";
        }

        ?>

        <div class="input">
            <label for="shoe-size">Schuhgröße: <span id="shoe-size-output"></span></label>
            <input type="range" name="shoeSize" min="0" max="60" value="50" class="slider" id="shoe-size-slider">
        </div>

        <div class="input">
            <label for="hair-color">Augenfarbe</label>
            <input name="eyeColor" type="color" id="hair-color" value="#ffffff">
        </div>

        <input type="submit" class="btn btn-success submit" name="submit" value="submit">

    </form>

    <script src="include/js/rechner.js"></script>

</html>

</body>

<?php


if (isset($_POST['submit'])) {

    // sammeln aller variablen 
    $age = $_POST['age'];
    $height = $_POST['height'];
    $hairColor = $_POST['hairColor'];
    $eyeColor = $_POST['eyeColor'];
    $genderValue = $_POST['genderValue'];
    $shoeSize = $_POST['shoeSize'];
    $hairLength = $_POST['hairLength'];

    $conn = new mysqli("localhost", "root", "", "shop");

    if ($conn->connect_error) {
        die("There was an error connection the Database");
    }

    $sql = "INSERT INTO menschen (age, height, hairColor, hairLength, gender, shoeSize, eyeColor)
        VALUES ('$age', '$height', '$hairColor', '$hairLength', '$genderValue', '$shoeSize', '$eyeColor' )";


    if ($conn->query($sql) === TRUE) {
        header("location:results.php?price=69420");
    } else {
        echo "There was an error :(" . "<br>" .  $conn->error;
    }
}

?>