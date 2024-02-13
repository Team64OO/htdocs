<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h2 {
        font-size: 30px;
        color: orange;
        text-align: center;
    }
    </style>
</head>
<body>
    <h2>
    <?php
    for ($i=1; $i < 101; $i++) { 
        print(rand(1,100) . "<br>");
        if ($i % 3 == 0) {
            print("<br>");
        }
    }
    ?>
    </h2>
</body>
</html>