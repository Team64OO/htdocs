<?php
if (isset($_GET["reverse"])) {
    $string = $_GET["reverse"];
    $output = strrev($string);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="reverse">
        <input type="submit">
    </form>
    <?php
        if (isset($output)) {
            echo $output;
        }
    ?>
</body>
</html>