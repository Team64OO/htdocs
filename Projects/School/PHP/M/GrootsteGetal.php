<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            margin: 0;
            padding: 0;
        }

        h1 {
        margin-top: -4530px;
        margin-left: 314px;
        }
    </style>
</head>
<body>
    <?php
    $getallen = array();
    for ($i=0; $i < 100; $i++) { 
        $getal = rand(1,100);
        array_push($getallen, $getal);
    }
    foreach ($getallen as $arrayGetal) {
        print("<h2>" . $arrayGetal . "</h2><br>");
    }
    print("<h1>het grootste getal is " . max($getallen) . "</h1>");
    ?>
</body>
</html>
