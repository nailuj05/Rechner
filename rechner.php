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

    <form class="inputs">

        <div class="input">
            <label for="age">Alter: <span id="age-output"></span></label>
            <input type="range" min="1" max="100" value="50" class="slider" id="age-slider">
        </div>

        <div class="input">
            <label for="height">Größe: <span id="height-output"></span></label>
            <input type="range" min="1" max="300" value="50" class="slider" id="height-slider">
        </div>

        <div class="input">
            <label for="hair-color">Haarfarbe</label>
            <input type="color" id="hair-color" name="hair-color" value="#ffffff">
        </div>

        <div class="input">
            <label for="hair-length">Haarlänge: <span id="hair-length-output"></span></label>
            <input type="range" min="0" max="300" value="50" class="slider" id="hair-length-slider">
        </div>

        <!-- Genderbasierte Fallunterscheidung der Geschlechtsfunktionen -->

        <?php
            if (isset($_GET['gender'])) {
                $gender = $_GET['gender'];

                if($gender=="woman"){
                    // echo "woman";
                    echo"
                        <div class='input'>
                            <label for='gender-size'>Brustumlänge: <span id='gender-size-output'></span></label>

                    ";
                }

                if($gender=="man"){
                    echo"
                    <div class='input'>
                        <label for='gender-size'>Penisgröße: <span id='gender-size-output'></span></label>

                ";
                }

                if($gender=="helicopter"){
                    echo"
                    <div class='input'>
                        <label for='gender-size'>Kaliber in cm: <span id='gender-size-output'></span></label>

                    ";
                }

                echo "
                <input type='range' min='0' max='60' value='50' class='slider' id='gender-size-slider'>
                </div>
                ";
            }
            else{
                echo "Undefiniertes Geschlecht";
            }

        ?>

        <div class="input">
            <label for="shoe-size">Schuhgröße: <span id="shoe-size-output"></span></label>
            <input type="range" min="0" max="60" value="50" class="slider" id="shoe-size-slider">
        </div>

        <div class="input">
            <label for="hair-color">Augenfarbe</label>
            <input type="color" id="hair-color" name="hair-color" value="#ffffff">
        </div>

        <input type="submit" class="btn btn-success submit" name="submit" value="submit">

    </form>

    <script src="include/js/rechner.js"></script>

</html>

</body>

<?php

if (isset($_GET['submit'])) {
    echo "submited";
    header("location:results.php?price=69420");
}

if (isset($_GET['gender'])) {
    $gender = $_GET['gender'];
    echo $gender;
}

?>