<!DOCTYPE html>
<html>
<form method="GET">
    <label for="Alter"> Alter: </label>
    <input type="range" name="Alter" min="1" max="100" value="50">
    <output name="outA" for="Alter"> </output>
    <br>
    <label for="Größe"> Größe: </label>
    <input type="range" name="Groesse" min="100" max="220" value="175">
    <br>
    <input type="submit" name="submit">
</form>

</html>

<?php
    #test
    if (isset($_POST['submit'])) {
        $Alter = $_POST['Alter'];
        echo $Alter;
    }
?>