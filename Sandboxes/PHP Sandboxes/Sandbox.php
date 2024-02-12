<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
    <?php 
    if (isset($_GET["sand"])) {
        $_SESSION["sand"] = $_GET["sand"];
    }
    if (!isset($_SESSION["sand"])) {
        ?>
        <form action="sandbox.php" method="GET">
        <label for="Sand">Voer iets in:</label>
        <input type="text" id="Sand" name="sand">
        <input type="submit">
        </form><br>
    <?php } 
    ?>

    <?php
    if (isset($_GET["sand"])) {
        ?>
        <form action="sandbox.php" method="GET">
        <label for="Sand2">Voer nog iets in:</label>
        <input type="text" id="Sand2" name="sand2">
        <input type="submit">
        </form><br>
        <?php
    }

    if (isset($_GET["sand2"])) {
        $sand = $_SESSION["sand"];
        $_SESSION["sand2"] = $_GET["sand2"];
        $sand2 = $_SESSION["sand2"];
        print ($sand . "<br>" . $sand2);
        ?> 
        <form action="sandbox.php">
        <input type="submit" value="terug">
        </form>
        <?php
        session_destroy();
    }
    ?>

    </h2>
</body>
</html>