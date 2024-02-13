<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/f547d02788.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
    <i class="fa-regular fa-snowflake" style="color: #000000;"></i>
    <?php if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["email"])) {?><h1><?php echo "Dankjewel " . $_POST["fname"] . " voor je aanmelding";?></h1><?php } else {?>
        <h1>Christmas Greetings</h1>
        <?php } ?>
        <i class="fa-solid fa-tree" style="color: #0c8825;"></i>
    </div>
    <ul class="center">
        <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Home</a></li>
        <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Products</a></li>
        <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Company</a></li>
        <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Blog</a></li>
    </ul>
    <div class="info">
        <div class="infobox">
            <div class="x">
                <div class="info1">
                    <h3>Lorem Ipsum</h3>
                    <div class="subinfo1">
                        <h4 class="bold">Lorem ipsum</h4>
                        <h4>Lorem ipsum</h4>
                    </div>
                    <div class="subinfo1">
                        <h4 class="bold">Lorem ipsum</h4>
                        <h4>Lorem ipsum</h4>
                    </div>
                    <div class="subinfo1">
                        <h4 class="bold">Lorem ipsum</h4>
                        <h4>Lorem ipsum</h4>
                    </div>
                    <div class="subinfo1">
                        <h4 class="bold">Lorem ipsum</h4>
                        <h4>Lorem ipsum</h4>
                    </div>
                </div>
                <div class="info2">
                    <h3>Lorem Ipsum Dolar Sit Amet</h3>
                    <div class="subinfo2">
                        <h4>Lorem ipsum</h4>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="learn">Learn More</a>
            </div>
        </div>
        <div class="signup">
            <div>
                <h2 style="text-align: center;">Newsletter Sign Up</h2>
                <h4 class="bold">Name</h4>
                <div>
                    <form method="POST">
                        <input type="text" name="fname"></input>
                        <input type="text" name="lname"></input>

                </div>
                        <div style="display: flex">
                            <h4 style="width: 172px;">First Name</h4>
                            <h4 style="width: 172px;">Last Name</h4>
                        </div>
                        <h4 class="bold" style="padding-top:20px;">Email</h4>
                        <input type="text" name="email" style="width: 338px">
                        <h4 class="bold" style="padding-top:20px;">How can we help?</h4>
                        <h4 style="padding-top:10px;">Lorem Ipsum</h4><br>
                        <textarea type="text" name="help" style="padding-top: 2px; width: 338px; height: 100px;"></textarea>
                <div style="padding-top: 20px;">
                        <input type="submit" value="Sign Up"></input>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
