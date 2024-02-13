<?php 
if (isset($_GET["nummer1"]) && isset($_GET["nummer2"]) && isset($_GET["nummer3"]) && isset($_GET["nummer4"]) && isset($_GET["nummer5"]) && isset($_GET["nummer6"])) {
    $getallen = array(
    $_GET["nummer1"],
    $_GET["nummer2"],
    $_GET["nummer3"],
    $_GET["nummer4"],
    $_GET["nummer5"],
    $_GET["nummer6"]
    );
    $randGetallen = array(
        rand(1,42),
        rand(1,42),
        rand(1,42),
        rand(1,42),
        rand(1,42),
        rand(1,42)
    );
    $overeenkomst = count(array_intersect($getallen, $randGetallen));
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
    <h3 style="text-align: center;">
    <form action="Lotto.php" method="GET">
    <label for="Nummer1">Geef lotto nummer 1: </label>
    <input type="number" id="Nummer1" name="nummer1" value="<?php print($nummer1); ?>"><br>
    <label for="Nummer2">Geef lotto nummer 2: </label>
    <input type="number" id="Nummer2" name="nummer2" value="<?php print($nummer2); ?>"><br>
    <label for="Nummer3">Geef lotto nummer 3: </label>
    <input type="number" id="Nummer3" name="nummer3" value="<?php print($nummer3); ?>"><br>
    <label for="Nummer4">Geef lotto nummer 4: </label>
    <input type="number" id="Nummer4" name="nummer4" value="<?php print($nummer4); ?>"><br>
    <label for="Nummer5">Geef lotto nummer 5: </label>
    <input type="number" id="Nummer5" name="nummer5" value="<?php print($nummer5); ?>"><br>
    <label for="Nummer6">Geef lotto nummer 6: </label>
    <input type="number" id="Nummer6" name="nummer6" value="<?php print($nummer6); ?>"><br><br>
    <input type="submit"><br><br>
    </form>
    <?php
    if (isset($_GET["nummer1"]) && isset($_GET["nummer2"]) && isset($_GET["nummer3"]) && isset($_GET["nummer4"]) && isset($_GET["nummer5"]) && isset($_GET["nummer6"])) {
        sort($getallen);
        sort($randGetallen);
        foreach ($getallen as $getal) {
            print ($getal . " ");
        }
        print ("<br>");
        foreach ($randGetallen as $rGetal) {
            print ($rGetal . " ");
        }
        print ("<br>");
        if ($overeenkomst < 3) {
            print ("Je hebt 0 euro gewonnen.");
        } elseif ($overeenkomst == 3) {
            print ("Je hebt 10 euro gewonnen");
        } elseif ($overeenkomst == 4) {
            print ("Je hebt 100 euro gewonnen");
        } elseif ($overeenkomst == 5) {
            print ("Je hebt 1000 euro gewonnen");
        } elseif ($overeenkomst == 6) {
            print ("Je hebt 10000 euro gewonnen");
        }
    }
    ?>
    </h3>
</body>
</html>