<?php

$octal = '123'; //variable to convert to decimal
$length = strlen($octal); //length of the octal number
$output = "0"; //placeholder for output

for ($i=0; $i < $length; $i++) { 
    $output += $octal[$i] * pow(8, $length - $i - 1); //calculate $output for each $i and add them together
}

echo "octal: " . $octal . "<br>decimal: " . $output; //output the octal number and the decimal number