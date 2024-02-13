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

    <form action="DiamantTekenen.php" method="GET">
        <label for="Sterren">Hoeveel sterren wil je printen?</label>
        <input type="number" id="Sterren" name="sterren">
        <input type="submit">
    </form>
    <br>
    <?php
    if (isset($_GET["sterren"]) && $_GET["sterren"] % 2 == 1) {
        for ($i=0; $i < $_GET["sterren"] / 2 + 1; $i++) { 
            for ($ii=0; $ii < $i * 2 - 1; $ii++) { 
                print ("*");
            }
            print ("<br>");
        }
        for ($i=$_GET["sterren"] / 2 + 1; $i > 0; $i--) { 
            for ($ii=0; $ii + 4 < $i * 2; $ii++) { 
                print ("*");
            }
            print ("<br>");
        }
    } elseif ($_GET["sterren"] < 0) {
        print ("Dat gaat niet werken ");
    } else {
        print ("*");
    }
    ?>
</body>
</html>