<?php
include ("CijferBerekenen.php");
include ("DeelbaarDoor.php");
$deeltal = SetDeeltal();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    //print (PrintCijfer());

    print (DeelbaarDoor($deeltal));
    ?>
</body>
</html>