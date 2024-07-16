<?php 
    class calc {
        function calcSum($x, $y = 1) {
            $output = $x + $y;
            return $output;
        }
    }

    $object = new calc;
    $renderOutput = $object->calcSum(15);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $renderOutput ?>
    </h1>
</body>
</html>