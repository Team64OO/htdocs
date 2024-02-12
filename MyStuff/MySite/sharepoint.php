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
    <title>Sharepoint+</title>
</head>
<body>
    <ul style="display: flex; justify-content: space-between; align-items: center;">
        <li><a href="/MyStuff/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a></li>
        <h3 style="padding: 0; margin: 0; width: 120px;">Sharepoint+</h3>
        <li style="float: right"><a href="/MyStuff/MySite/">Back</a></li>
    </ul>
    <div style="display: flex; flex-direction: row; justify-content: center; gap: 10px; padding: 5px; padding-top: 10px;">
        <a href="https://outlook.office.com/mail/" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/mail<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center;">Mail</h3>
        </a>
        <a href="https://roosters.deltion.nl/roster/view/?type=group&name=SD1A&teachersfullname=true" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; padding: 4px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/today<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center;">Today</h3>
        </a>
        <a href="https://stdeltion.sharepoint.com/sites/studenten" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/home<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center;">Home</h3>
        </a>
    </div>
    <div style="display: flex; flex-direction: row; justify-content: center; gap: 10px; padding: 5px;">
        <a href="https://deltion.osiris-student.nl/home" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/checkbox<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center;">Osiris</h3>
        </a>
        <a href="https://toa.toets.nl/" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; padding: 4px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/book<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center;">Toa</h3>
        </a>
        <a href="https://elo.deltion.nl/saml/#-207" style="padding: 3px; background: var(--navbar); border-radius: 25%; width: 120px; height: 120px; display: flex; justify-content: center; flex-direction: column; text-decoration: none;" target="_blank">
            <img src="./images/school<?php echo( (isset($_SESSION["theme"]) && ($_SESSION["theme"] == "light" || $_SESSION["theme"] == "ocean" || $_SESSION["theme"] == "rainbow")) ? "light" : "dark" ) ?>.svg" alt="settings" style="height: 34.4px; margin-top: 10px;">
            <h3 style="color: var(--font); text-decoration: none; text-align: center; font-size: 105%;">Cumlaude</h3>
        </a>
    </div>
</body>
</html>