<?php
include 'getalArray.php';

$getal = isset($_POST["getal"]) ? $_POST["getal"] : 0;
$lateg = strrev($getal);
$yarra = str_split($lateg, 3);
$array = array_reverse($yarra);
$table = "<table><tr><th>Getal</th><th>Naam</th></tr>";

foreach ($array as $i => $number) {
    $max = count($array) - 1;
    $table .= "<tr><td>" . strrev($number) . "</td><td>" . $getallen[$max] . "</td></tr>";
    array_pop($yarra);
    $array = array_reverse($yarra);
}
$table .= "</table>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splitgetal</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            overflow: hidden;
        }

        table {
            margin-bottom: 15px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 5px;
            text-align: center;
        }

        th {
            top: -1px;
            position: sticky;
            background-color: grey;
        }

        .flex {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .overflow {
            border: 3px solid black;
            max-height: 600px;
            overflow: auto;
        }
    </style>
</head>

<body>
    <div class="flex">
        <div class="overflow">
            <?php echo $table; ?>
        </div>
        <form method="POST">
            <input type="submit"></input>
            <input type="number" name="getal"></input>
        </form>
    </div>
</body>

</html>