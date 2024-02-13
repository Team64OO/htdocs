<?php
session_start();
if (isset($_GET["theme"])) {
    $_SESSION["theme"] = $_GET["theme"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/theme_<?php echo( (isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora" )?>.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team6400's stuff</title>
</head>
<body>
    <ul>
        <li><a href="/NoSchool/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a></li>
        <li><a href="/" target="_blank">Localhost</a></li>
        <li><a href="https://www.w3schools.com/" target="_blank">w3schools</a></li>
        <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
        <li class="dropdown" style="padding: 0;" id="navbar">
            <a class="dropbtn">Sharepoint+ ▼</a>
            <div class="dropdown-content">
            <a href="https://stdeltion.sharepoint.com/sites/studenten" target="_blank">Sharepoint</a>
            <a href="https://roosters.deltion.nl/roster/view/?type=group&name=SD1A&week=1" target="_blank">Rooster</a>
            <a href="/NoSchool/Mysite/sharepoint.php">More...</a>
            </div>
        </li>
        <li><a href="https://deltionict.github.io/lucy/" target="_blank">Lucy</a></li>
        <li><a href="https://padlet.com/jjonge/ict-english-7qlbfc85e10i7mmt" target="_blank">Padlet</a></li>
        <li><a href="https://trello.com/b/6v0dK76W/module-1" target="_blank">Progress</a></li>
        <li><a href="https://digit-mbo.nl/" target="_blank">DIGIT</a></li>
        <li><a href="https://github.com/" target="_blank">Github</a></li>
        <li><a href="https://www.esl-lab.com/" target="_blank">ESL lab</a></li>
        <li style="float:right">
            <button style="padding: 0; background: none; border: none; cursor: pointer"><a href="/NoSchool/MySite/settings.php" style="padding: 3px;"><img src="./images/settings<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px;"></a></button>
        </li>
        <li style="float: right;"><a href="/NoSchool/MySite/admin.php">Log In</a></li>
    </ul>
    <h1>
        <div class="center">
            <!-- <p>A place for everything and anything</p> -->
            <p>Pa's wijze lynx bezag vroom het fikse aquaduct.1234567890</p>
        </div>
    </h1>
</body>
</html>