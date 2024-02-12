<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="BMI.php" method="GET">
    <label for="Lengte"><h2>Wat is je lengte? (cm)</h2></label>
    <input type="text" id="Lengte" name="lengte">
    <label for="Gewicht"><h2>Wat is je gewicht? (kg)</h2></label>
    <input type="text" id="Gewicht" name="gewicht">
    <input type="submit">
    <h2>
    <?php
    if (isset($_GET["lengte"]) && isset($_GET["gewicht"])) {
        $BMI = $_GET["gewicht"] / pow($_GET["lengte"] / 100, 2);
        print($BMI . "<br>");
        if ($BMI < 18.5) {
            print ("je hebt ondergewicht");
        } elseif ($BMI < 25 && $BMI >= 18.5) {
            print ("je hebt een gezond gewicht");
        } elseif ($BMI < 30 && $BMI >= 25) {
            print ("je hebt overgewicht");
        } elseif ($BMI >= 30) {
            print ("je hebt ernstig overgewicht (obesitas)");
        }
    }
    ?>
    </h2>
</body>
</html>