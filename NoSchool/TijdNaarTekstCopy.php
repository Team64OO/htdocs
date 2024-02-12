<?php
include '../Functions.php';
include '../TijdNaarTekstClass.php';
if (isset($_GET["uren"]) && isset($_GET["minuten"])) {
    $uren = $_GET["uren"];
    $minuten = $_GET["minuten"];
} else {
    $uren = (int)date('H');
    $minuten = (int)date('i');
}

$tijd = new Tijd();

$tijd->init(1, 20);

$tijd->print();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tijd Naar Getal</title> 
    <style>
        input[type="number"] {
            width: 45px;
        }
        * {
            text-align: center;
        }
    </style>
</head>
<body>
   
    <h3>Voer een tijd in:</h3>
    <form action="TijdNaarTekst.php" method="GET">
        <input type="number" name="uren" value="<?php print $uren; ?>">
        :   
        <input type="number" name="minuten" value="<?php print $minuten; ?>"><br><br>
        <input type="submit" value="Tijd naar tekst!">
        <button type="button" onclick="window.open('./TijdNaarTekst.php','_self')">Reset tijd</button>
        <br><br>
    </form>
    <?php
    tijdNaarTekst($minuten, $uren);
    ?>
</body>
</html>