<?php
session_start();
if (isset($_GET["reset"])) {
    session_destroy();
}
if (!isset($_SESSION["letters"])) {
    $_SESSION["punten"] = array();
    $_SESSION["geradenLetters"] = 0;
    $_SESSION["letters"] = array();
    $_SESSION["poging"] = 0;
    $_SESSION["fouteLetters"] = array();
    $_SESSION["randWoord"] = array();       /*
    voeg hieronder een woord toe
    woorden kunnen alleen in kleine letters
    voorbeeld: $woorden = array (
    "test"
    );                                      */
    $woorden = array( 
    "zebrapad",
    "test"
    );
    $randWoord = $woorden[rand(0, count($woorden) - 1)];
    for ($i=0; $i < strlen($randWoord); $i++) { 
        array_push($_SESSION["punten"], ".");
    }
    for ($i=0; $i < strlen($randWoord); $i++) { 
        array_push($_SESSION["randWoord"], $randWoord[$i]);
    }
}
if (isset($_GET["letters"])) { 
    $needle = $_GET["letters"];
}
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raad Het Woord</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>
    <?php
    if ($_SESSION["geradenLetters"] == count($_SESSION["randWoord"])) {
        print ("je hebt het woord geraden");
        session_destroy();
        ?>
        <button type="button" onclick="window.open('./RaadHetWoord.php','_self')">Opnieuw</button>
        <?php
        exit;
    } else {
        ?>
        <form action="RaadHetWoord.php" method="GET">
            <input type="text" name="letters" size="1" maxlength="1">
            <input type="submit" value="Raden">
            <button type="button" onclick="window.open('./RaadHetWoord.php?reset=0','_self')">Reset</button>
        </form>
        <?php
        if (isset($_GET["letters"])) {
        array_push($_SESSION["letters"], $_GET["letters"]);
        if (in_array($_GET["letters"], $_SESSION["randWoord"])){
            print ("<br>je hebt een letter geraden.<br>");
            $_SESSION["poging"]++; 
            $positie = array_keys($_SESSION["randWoord"], $_GET["letters"]);
            if (!in_array($needle, $_SESSION["punten"])) {
                for ($i=0; $i < count($positie); $i++) { 
                    $_SESSION["geradenLetters"]++;
                }
            }
            for ($i=0; $i < count($positie); $i++) { 
                $_SESSION["punten"][$positie[$i]] = $_GET["letters"];
            }
            print ("aantal pogingen: " . $_SESSION["poging"] . "<br>");
            print ("foute letters: ");
            foreach ($_SESSION["fouteLetters"] as $letter) { 
                print ($letter . " ");
            }
            print ("<br><br>Het woord:");
        } else {
            print ("<br>helaas, de letter zat er niet in.<br>");
            $_SESSION["poging"]++;
            print ("aantal pogingen: " . $_SESSION["poging"]);
            array_push($_SESSION["fouteLetters"], $_GET["letters"]);
            print ("<br>foute letters: ");
            foreach ($_SESSION["fouteLetters"] as $letter) { 
                print ($letter . " ");
            }
            print ("<br><br>Het woord:");
            }
        } 
    }  
    print ("<br>");
    foreach ($_SESSION["punten"] as $punt) {
        print ($punt);
    }
    ?>
    </h3>
</body>
</html>