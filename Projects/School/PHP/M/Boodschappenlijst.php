<h3>
<?php
session_start();
//session_destroy();
if (isset($_GET["boodschappen"])) {
    $_SESSION["boodschappen"] = $_GET["boodschappen"];
    $_SESSION["lijst"] = array();
    $_SESSION["index"] = 0;
}

if (isset($_GET["reset"])) {
    session_destroy();
}

if (!isset($_SESSION["index"])) { ?>
    <form action="Boodschappenlijst.php" method="GET">
        <label for="Boodschappen">Hoeveel boodschappen wil je toevoegen?</label>
        <input type="number" id="Boodschappen" name="boodschappen">
        <input type="submit">
    </form>
<?php }

if (isset($_SESSION["boodschappen"])) {
    if ($_SESSION["index"] < $_SESSION["boodschappen"] - 1) {
        ?>
        <form action="Boodschappenlijst.php" method="GET">
            <input type="text" name="boodschap">
            <input type="submit">
        </form> 
        <?php
    }
    if (isset($_GET["boodschap"]) && $_SESSION["index"] < $_SESSION["boodschappen"]) {
        array_push($_SESSION["lijst"], $_GET["boodschap"]);
        $_SESSION["index"]++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boodschappenlijst</title>
        <style>
            * {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        if (isset($_SESSION["boodschappen"])) {
            if (isset($_SESSION["lijst"][$_SESSION["boodschappen"] - 1])) {
                print ("Deze boodschappen staan er op je lijst:<br>");
                foreach ($_SESSION["lijst"] as $boodschap) {
                    print ("$boodschap<br>");
                } 
                ?>
                <form>
                    <button type="button" onclick="window.open('./Boodschappenlijst.php?reset=0','_self')">Reset</button>
                </form>
                <?php
            }
        }
        ?>
    </h3>
</body>
</html>