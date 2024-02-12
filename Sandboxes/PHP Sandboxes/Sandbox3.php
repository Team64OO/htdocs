<?php
function Output($sand) {
    if ($_GET["sand"] == 1) {
        $sand = $_GET["sand"];
        return ("sand".$sand);
    } elseif ($_GET["sand"] == 2) {
        $sand = $_GET["sand"];
        return ("sand".$sand);
    } elseif ($_GET["sand"] == 3) {
        $sand = $_GET["sand"];
        return ("sand".$sand);
    } elseif ($_GET["sand"] == 4) {
        $sand = $_GET["sand"];
        return ("sand".$sand);
    }
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
    <form action="Sandbox3.php" method="GET">
        <select name="sand" style="width:50px; height:20px;">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <input type="submit" value="Submit">
        <?php
        if (isset($_GET["sand"])) {
            print (Output($_GET["sand"]));
        }
        ?>
</body>
</html>
