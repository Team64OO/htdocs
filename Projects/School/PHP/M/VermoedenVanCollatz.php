<?php
if (isset($_GET["begingetal"])) {
    $begingetal = $_GET["begingetal"];
}
$pogingen = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Het vermoeden van Collatz</title>
</head>
<body>
    <style>
    * {
        text-align: center;
    }

    h3 {
        color: blue;
    }
    </style>
    <h2>
    <form action="VermoedenVanCollatz.php" method="GET">
    <label for="Begingetal">Voer een begingetal in:</label>
    <input type="number" id="Begingetal" name="begingetal">
    <input type="submit"><br><br>
    </h2>
    <h3>
    <?php
    if (isset($_GET["begingetal"])) {
        while ($begingetal != 1) {
            if ($begingetal % 2 == 0 && $begingetal != 0) {
                print($begingetal . "<br>");
                $begingetal = $begingetal / 2;
                $pogingen++;
            } elseif ($begingetal % 2 != 0 && $begingetal != 0) {
                print($begingetal . "<br>");
                $begingetal = ($begingetal * 3) + 1;
                $pogingen++;
            } else {
                print($begingetal . "<br>");
                $begingetal = $begingetal + 1;
                $pogingen++;
            }
        }
        $pogingen++;
        print($begingetal . "<br>");
        print("Het kostte " . $pogingen . " pogingen om op 1 uit te komen");
    }
    ?>
    </h3>
</body>
</html>