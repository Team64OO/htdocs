<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerstboom</title>
    <style>
        h1, h2, h3, body {
            text-align: center;
            background-color: black;
        }

        h1 {
            font-size: 25px;
            color: white;
            margin-top: unset;
            margin-bottom: unset;
        }

        h2 {
            color: brown;
            margin-top: unset;
            margin-bottom: unset;
        }

        h3 {
            font-size: 30px;
            color: green;
            margin-top: unset;
            margin-bottom: unset;
        }

        h4 {
            font-size: 25px;
            color: #e1c328;
            margin-top: unset;
            margin-bottom: unset;
        }

        p {
            font-size: 25px;
            margin-top: -4px;
            margin-bottom: unset;
            margin-left: -4px;
            height: 10px;
        }

        .flex-container {
        display: flex;
        justify-content: center;
        }

        .flex-container > div {
        margin: 0;
        padding: 0;
        font-size: 25px;
        }
    </style>
</head>
<body>
    <?php
    if (!isset($_GET["ster"])) {
        ?>
        <h1>
        <form action="Sterren.php" method="GET">
        <label for="Ster">Hoeveel sterren wil je printen?</label>
        <input type="number" id="Ster" name="ster">
        <input type="submit">
        <br>
        </h1>
        <?php
    }
    ?>
    <h4>
    <div class="flex-container">
    <?php
    if (isset($_GET["ster"])) {
        $_SESSION["ster"] = $_GET["ster"];
        }
        if (isset($_SESSION["ster"])) {
        if ($_SESSION["ster"] > 30) {
            for ($i=0; $i < 3; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 5; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 5; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 5; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 3; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 2; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 2; $i++) { 
                print ("<p>*</p>");
            }
            ?>
            </div>
            <div class="flex-container">
            <?php
            for ($i=0; $i < 2; $i++) { 
                print ("<p>*</p>");
            }
        }
    }
    ?>
    </div>
    <h3>
    <?php
    if (isset($_SESSION["ster"])) {
        $ster = $_SESSION["ster"];
        for ($i=0; $i < $ster; $i++) { 
            ?>
            <div class="flex-container">
            <?php
            for ($ii = 0; $i + 1 > $ii; $ii++) {
                $led = rand(1,10);
                if ($led == 3) {
                    $color = rand(1,6);
                    if ($color == 1) {
                        print ('<p style="color:blue;">*</p>');
                    } elseif ($color == 2) {
                        print ('<p style="color:red;">*</p>');
                    } elseif ($color == 3) {
                        print ('<p style="color:yellow;">*</p>');
                    } elseif ($color == 4) {
                        print ('<p style="color:pink;">*</p>');
                    } elseif ($color == 5) {
                        print ('<p style="color:orange;">*</p>');
                    } elseif ($color == 6) {
                        print ('<p style="color:aqua;">*</p>');
                    }
                } else {
                    print("<p>*</p>");
                }
            }
            print("</div>");
        }
    }
    ?>
    </h3>
    <h2>
    <?php
    $percentage = 30;
    $percentage2 = 11;
    if (isset($_SESSION["ster"])) {
        $lengte = ($percentage / 100) * (int)$_SESSION["ster"];
        $breedte = ($percentage2 / 100) * (int)$_SESSION["ster"];

        for ($iii=0; $iii < $lengte; $iii++) {
            ?>
            <div class="flex-container">
            <?php
            for ($iiii=0; $iiii < $breedte; $iiii++) { 
                print ("<p>*</p>");
            }
            print("</div>");
        }
    }
    print("<br>");
    ?>
    </h2>
    <?php 
    if (isset($_GET["ster"])) {
        ?>
    </h4>
    <form action="Sterren.php">
    <input type="submit" value="ga terug">
    </form>
    <?php
    }
    // session_destroy();
    ?>
</body>
</html>
