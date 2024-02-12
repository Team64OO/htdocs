<h3>
<?php

session_start();
//session_destroy();

if (isset($_GET["play"])) {
    $_SESSION["play"] = $_GET["play"];
    $_SESSION["index"] = 0;
    $_SESSION["spelerWin"] = 0;
    $_SESSION["botWin"] = 0;
    $_SESSION["gelijkspel"] = 0;
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
    <?php
    if (!isset($_SESSION["play"])) {
        ?>
        <form action="SteenPapierSchaar.php" method="GET">
        <label for="play">Hoeveel keer wil je spelen?</label>    
        <input type="number" id="play" name="play">
        <input type="submit" value="Verder">
        <?php
    }
    if (isset($_SESSION["play"])) {
        if ($_SESSION["index"] < $_SESSION["play"] - 1) {
            ?>
            <form action="SteenPapierSchaar.php" method="GET">
                <select name="speler"><br>
                    <option selected disabled hidden>Kies Steen, Papier of Schaar</option>
                    <option value="steen">Steen</option>
                    <option value="papier">Papier</option>
                    <option value="schaar">Schaar</option>
                </select>
                <input type="submit" value="Verder">
            <?php
        }
        if ($_SESSION["index"] < $_SESSION["play"]) {
            if (isset($_GET["speler"])) {
                $_SESSION["bot"] = rand(1,3);
                $_SESSION["speler"] = $_GET["speler"];
                if ($_SESSION["speler"] == "steen" && $_SESSION["bot"] == 1/*steen*/ || $_SESSION["speler"] == "papier" && $_SESSION["bot"] == "2"/*papier*/ || $_SESSION["speler"] == "schaar" && $_SESSION["bot"] == 3/*schaar*/) {
                    print("Gelijkspel");
                    $_SESSION["gelijkspel"]++;
                    $_SESSION["index"]++;
                } elseif ($_SESSION["speler"] == "steen" && $_SESSION["bot"] == 3/*schaar*/ || $_SESSION["speler"] == "papier" && $_SESSION["bot"] == 1/*steen*/ || $_SESSION["speler"] == "schaar" && $_SESSION["bot"] == 2/*papier*/) {
                    print("Je hebt gewonnen");
                    $_SESSION["spelerWin"]++;
                    $_SESSION["index"]++;
                } else {
                    print("Je hebt verloren");
                    $_SESSION["botWin"]++;
                    $_SESSION["index"]++;
                }
            }
        }
        if ($_SESSION["index"] == $_SESSION["play"]) {
            print("<br>Je hebt " . $_SESSION["spelerWin"] . " keer gewonnen<br>");
            print("Je hebt " . $_SESSION["botWin"] . " keer verloren<br>");
            print("Je hebt " . $_SESSION["gelijkspel"] . " keer gelijk gespeeld<br>");
            ?>
            <form action="SteenPapierSchaar.php" method="GET">
                <input type="hidden" name="reset" value="0">
                <button>Opnieuw
            <?php
        }
    }
    ?>
<h3>
</body>
</html>