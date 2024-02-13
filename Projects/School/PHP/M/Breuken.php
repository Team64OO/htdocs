<?php
if (isset($_GET["deeltal"]) && isset($_GET["deler"])) {
    if ($_GET["deeltal"] == "" || $_GET["deler"] == "") {
        exit;
    }
    $deeltal = $_GET["deeltal"];
    $deler = $_GET["deler"];
    $uitkomst = $deeltal / $deler;
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
    <style>
        * {
            text-align: center;
        }
    </style>
    <h3>
    <form action="Breuken.php" method="GET">
    <label for="Deeltal">Deeltal ?</label>
    <input type="number" id="Deeltal" name="deeltal" value="<?php print($_GET["deeltal"]); ?>"><br>
    <label for="Deler">Deler ?</label>
    <input type="number" id="Deler" name="deler" value="<?php print($_GET["deler"]); ?>"><br>
    <input type="submit"><br><br>
    <?php
    if (isset($_GET["deeltal"]) && isset($_GET["deler"])) {
        if ($deeltal % $deler != 0) {
            print("$deeltal / $deler = " . floor($deeltal / $deler) . " " . $deeltal % $deler . "/$deler");
        } else {
            print("$deeltal / $deler = " . floor($deeltal / $deler));
        }
    }
    ?>
</body>
</html>