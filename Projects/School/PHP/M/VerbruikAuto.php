<?php
    if (isset($_GET["literVoorRit"]) && isset($_GET["literNaRit"]) && isset($_GET["kilometerVoorRit"]) && isset($_GET["kilometerNaRit"])) {
        $aantalLiterinTankVoorRit = $_GET["literVoorRit"];
        $aantalLiterinTankNaRit = $_GET["literNaRit"];
        $kilometerstandNaRit = $_GET["kilometerVoorRit"];
        $kilometerstandVoorRit = $_GET["kilometerNaRit"];
        $verbruik = (100 * ($aantalLiterinTankVoorRit - $aantalLiterinTankNaRit) / ($kilometerstandNaRit - $kilometerstandVoorRit));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
    <form action="VerbruikAuto.php" method="GET">
    <label for="LiterVoorRit">Geef het aantal liter in de tank voor de rit:</label>
    <input type="number" id="LiterVoorRit" name="literVoorRit"><br>
    <label for="LiterNaRit">Geef het aantal liter in de tank na de rit:</label>
    <input type="number" id="LiterNaRit" name="literNaRit"><br>
    <label for="KilometerVoorRit">Geef de kilometerstand bij aanvang van de rit:</label>
    <input type="number" id="KilometerVoorRit" name="kilometerVoorRit"><br>
    <label for="KilometerNaRit">Geef de kilometerstand aan het einde van de rit:</label>
    <input type="number" id="KilometerNaRit" name="kilometerNaRit"><br>
    <input type="submit"><br>

    <?php
    if (isset($_GET["literVoorRit"]) && isset($_GET["literNaRit"]) && isset($_GET["kilometerVoorRit"]) && isset($_GET["kilometerNaRit"])) {
        print("Het gemiddelde verbruik van de auto tijdens deze rit was: " . round($verbruik * -1, 2));
    }
    ?>
    </h3>
</body>
</html>