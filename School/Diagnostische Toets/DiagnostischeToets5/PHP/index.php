<?php
include "clsDatabse.php";

$query = "SELECT * FROM artist";
$db = new database($query);
$result = $db->getSQL($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Toets</title>
</head>
<body>
    <?php
        echo $result;
        echo "<br>number of rows: " . $db->getCount();
    ?>
</body>
</html>