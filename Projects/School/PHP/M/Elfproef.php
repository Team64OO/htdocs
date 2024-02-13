<?php 
if (isset($_GET["IBAN"])) {
    $IBAN = $_GET["IBAN"];
    $check = array();
    for ($i=0; $i < 9; $i++) { 
        $nummer = substr($IBAN, $i, 1);
        array_push($check, $nummer);
    }

    $min = 9;
    $check2 = array();
    for ($ii=0; $ii < 9; $ii++) { 
        array_push($check2, ($check[$ii] * $min));
        $min--;
    }
    $som = array_sum($check2);
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
    <form action="Elfproef.php" method="GET">
    <label for="IBAN">Geef de laatste negen cijfers van je bankrekemingnummer:</label><br>
    <input type="number" id="IBAN" name="IBAN"><br>
    <input type="submit"><br>
    </h3>

    <?php
    if (isset($_GET["IBAN"])) { 
        if (strlen($IBAN) != 9) {
            print('<h3 style="color:red;">Je hebt geen negen cijfers ingevuld</h3>');
        }
        if ($som % 11 == 0) {
            print('<h3 style="color:#4cda4c;">dit rekeningnummer is geldig</h3>');
        } else {
            print('<h3 style="color:red;">dit rekeningnummer is ongeldig</h3>');
        }
    }
    ?>
</body>
</html>