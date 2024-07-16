<?php

include "classes/clsTeams.php";
include "classes/clsCompetitie.php";
include "classes/clsTable.php";

use teams as T;
use competitie as C;
use table as TB;

$Team1 = new T\Teams("Team6400", "SD1A", "Zwolle");
$Team2 = new T\Teams("Team2", "SD1B", "Zwolle");
$Team3 = new T\Teams("Team3", "SD1C", "Zwolle");
$Team4 = new T\Teams("Team4", "SD1D", "Zwolle");

$competitie1 = new C\competitie(2024);


$headers = [
    "Team1",
    "Team2"
];

$table = new TB\table($headers);
$table->addToTable($Team1->getNaam());
$table->addToTable($Team2->getNaam());
$render =  $table->table;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>PHP OOP</title>
</head>
<body>
    <?php
    echo $render;
    ?>
</body>
</html>