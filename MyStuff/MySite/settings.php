<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="./images/test.png">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/theme_<?php echo((isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora"); ?>.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team6400's settings</title>
</head>
<body>
    <ul>
        <li><a href="/MyStuff/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a></li>
        <li style="float: right"><a href="/MyStuff/MySite/">Back</a></li>
    </ul>
    <div style="display: flex; flex-direction: column; align-items: center; padding: 10px; gap: 10px; height: 100vh;">
        <div class="setting">
            <div class="desc">
                <p><?php echo( ucfirst((isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora" ))?></p>
                <p>This is the theme you <br>currently have selected</p>
            </div>
            <div class="settingitems">
                <div class="dropdown" id="settings">
                    <div>
                        <button class="dropbtn" id="right">Themes ▼</button>
                        <div class="dropdown-content" id="setting">
                            <a href="./updatesetting.php?theme=dark" style="width: 100%">Dark</a>
                            <a href="./updatesetting.php?theme=light" style="width: 100%">Light</a>
                            <a href="./updatesetting.php?theme=aurora" style="width: 100%">Aurora ✨</a>
                            <a href="./updatesetting.php?theme=phoenix" style="width: 100%">Phoenix ✨</a>
                            <a href="./updatesetting.php?theme=ocean" style="width: 100%">Ocean ✨</a>
                            <a href="./updatesetting.php?theme=rainbow" style="width: 100%">Rainbow ✨</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>