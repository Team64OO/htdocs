<!DOCTYPE html>
<html>
<body>
<div style='text-align:center;'>
<form action="WieIsDeWinnaar.php" method="post">
<label for="speler1"><h2>Wat is de score van speler 1?</h2></label>
<input type="number" id="speler1" name="speler1"><br>
<label for="speler2"><h2>Wat is de score van speler 2?</h2></label>
<input type="number" id="speler2" name="speler2"><br>
<input type="submit">

<?php
if (isset($_POST["speler1"])){
    if (isset($_POST["speler2"])) {
        if ($_POST["speler1"] == $_POST["speler2"]){
            print("<h2 style='color:#f9ff00;'>Gelijkspel</h2>");
        } elseif ($_POST["speler1"] < $_POST["speler2"]) {
            print("<h2 style='color:#eb0000;'>Speler 2 heeft gewonnen</h2>");
        } elseif ($_POST["speler1"] > $_POST["speler2"]) {
            print("<h2 style='color:#0065eb;'>Speler 1 heeft gewonnen</h2>");
        } else {
            print("<h2>Error</h2>");
        }
    }
}
?>
</div>
</body>

