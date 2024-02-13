<?php

$leeftijden = [];
$ouderDan18 = 0;
$jongerDan18 = 0;

for ($i=1; $i < 6; $i++) { 
    $leeftijd  = readline("- " . $i . ". Geef leeftijd op: ");
    array_push($leeftijden, $leeftijd);
}
print("\n");
foreach ($leeftijden as $leeftijd) {
    if ($leeftijd >= 18) {
        $ouderDan18++;
    } elseif ($leeftijd < 18) {
        $jongerDan18++;
    }
}
if ($ouderDan18 != 1) {
    print("er zijn " . $ouderDan18 . " personen 18 jaar of ouder\n");
} else {
    print("er is " . $ouderDan18 . " persoon 18 jaar of ouder\n");
}
if ($jongerDan18 != 1) {
print("er zijn " . $jongerDan18 . " personen jonger dan 18\n");
} else {
    print("er is " . $jongerDan18 . " persoon jonger dan 18\n");
}
print("de gemiddelde leeftijd is " . array_sum($leeftijden) / 5 ." jaar\n");