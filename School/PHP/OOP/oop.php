<?php 

class calculate {
    public $round;

    public function __construct($round, $text) {
        $this->round = $round;
        echo "<h1>" . $text . "</h1>";
    }

    public function calculateSum($x, $y) {
        $output = $x + $y;
        return round($output, $this->round);
    }
}

$text = "Numbers: ";
$x = 1234.73846348346;
$y = 9876;

$object = new calculate(3, $text);
$output = $object->calculateSum($x, $y);

// $output = calculateSum($x, $y);

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
    <?php echo  "function output: " . $output . "<br> \$this->round: "; ?>
    <?php echo $object->round; ?>
</h2>
</body>
</html>