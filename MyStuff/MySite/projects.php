<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/theme_<?php echo( (isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora" )?>.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="/MyStuff/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a></li>
        <li style="float: right"><a href="/MyStuff/MySite/">Back</a></li>
    </ul>
    <div class="center">
        <table style="width:50%">
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Desc.</th>
            </tr>
            <tr>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
                <td>[placeholder]</td>
            </tr>
        </table>
    </div>
</body>
</html>