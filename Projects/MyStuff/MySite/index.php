<?php
session_start();
if (isset($_GET["theme"])) {
    $_SESSION["theme"] = $_GET["theme"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./images/test.png">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/theme_<?php echo( (isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora" )?>.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team6400's stuff</title>
</head>
<body>
    <div class="navbar2">
    <a href="/MyStuff/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a>
    <a href="/" target="_blank">Localhost</a>
    <a href="https://www.w3schools.com/" target="_blank">w3schools</a>
    <a href="https://www.php.net/" target="_blank">PHP</a>
    <div class="dropdown2">
        <button class="dropbtn2">Sharepoint+ ▼
        <i class="fa fa-caret-down2"></i>
        </button>
        <div class="dropdown-content2">
        <a href="https://stdeltion.sharepoint.com/sites/studenten" target="_blank">Sharepoint</a>
        <a href="https://roosters.deltion.nl/roster/view/?type=group&name=SD1A&week=1" target="_blank">Rooster</a>
        <a href="/MyStuff/Mysite/sharepoint.php">More...</a>
        </div>
    </div>
    <a href="https://deltionict.github.io/lucy/" target="_blank">Lucy</a>
    <a href="https://padlet.com/jjonge/ict-english-7qlbfc85e10i7mmt" target="_blank">Padlet</a>
    <div class="dropdown3">
        <button class="dropbtn3">Progress ▼
        <i class="fa fa-caret-down2"></i>
        </button>
        <div class="dropdown-content3">
        <a href="/MyStuff/MySite/projects.php">Projects</a>
        <a href="https://trello.com/b/6v0dK76W/module-1" target="_blank">Trello</a>
        </div>
    </div>
    <a href="https://digit-mbo.nl/" target="_blank">DIGIT</a>
    <a href="https://github.com/" target="_blank">Github</a>
    <a href="https://www.esl-lab.com/" target="_blank">ESL lab</a>
    <a href="http://127.0.1.3/School/JS/" target="_blank">Jason?</a>
    <a href="https://rekenblokken.secure.malmberg.nl/chapter/es:96FD449A-15C1-4DA6-9B4D-5B9DB22B1114" target="_blank">Rekenen</a>
    <li style="float:right; list-style-type: none;">
        <button style="padding: 0; background: none; border: none; cursor: pointer; height: 44.8px;" ><a href="/MyStuff/MySite/settings.php" style="padding: 3px;"><img src="./images/settings<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px;"></a></button>
    </li>
    <li style="float: right; list-style-type: none; height: 44.8px;"><a href="/MyStuff/MySite/login.php">Log In</a></li>
    </div>
    <h1>
        <div class="center">
            <p>A place for everything and anything</p>
            <!-- <p>Pa's wijze lynx bezag vroom het fikse aquaduct.1234567890</p> -->
        </div>
    </h1>
    <div class="why"></div>
</body>
</html>