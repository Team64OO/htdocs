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
        body {
            background-color: #7ed3ef;
        }
    </style>
</head>
<body>
    <h2>
    <form action="Faculteit.php" method="GET">
    <label for="Faculteit">Voer een getal in</label>
    <input type="number" id="Faculteit" name="faculteit" value="<?php print($nummer); ?>">
    <input type="submit">
    </form>
    </h2>
    <?php
    if (isset($_GET["faculteit"]) && $_GET["faculteit"] != "") {
        $nummer = $_GET["faculteit"];
        $faculteit = 1;
        if ($nummer < 171 ) {
            for ($i=$nummer; $i >= 1; $i--) { 
                $faculteit = $faculteit * $i;
            }
            print ('<h2>de faculteit van ' . $_GET["faculteit"] . ' is ' . $faculteit . '</h2>');
        } else {
            print ('<h2>de faculteit van ' . $_GET["faculteit"] . ' is "INFINITE" </h2>');
        }
    }
    ?>
</body>
</html>