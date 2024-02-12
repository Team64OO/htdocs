<?php
include 'TijdNaarTekstfunctie.php';
include 'HuidigeTijdfunctie.php';
include 'TijdNaarTekstForm.php';
$tijd = tijdOphalen();
$text = tijdNaarTekst($tijd);
TijdNaarTekstForm($tijd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tijd Naar Tekst</title> 
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
    <?= $text ?>
</body>
</html>