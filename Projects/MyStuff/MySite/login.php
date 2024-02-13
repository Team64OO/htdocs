<?php session_start();

$conn = mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$query = "SELECT username, hashedPassword FROM users WHERE userID = 4";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    (isset($_GET["passreset"])) ? $_SESSION["loggedin"] = false : "";
    
    $username = (isset($_POST["username"])) ? $_POST["username"] : "";
    $password = (isset($_POST["password"])) ? $_POST["password"] : "";
    if ($row["username"] == $username && password_verify($password ,$row["hashedPassword"]) == true) {
        $_SESSION["loggedin"] = true;
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/test.png">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/theme_<?php echo((isset($_SESSION["theme"])) ? $_SESSION["theme"] : "aurora"); ?>.css">
    <title>Team6400's login page</title>
</head>
<body>
    <ul>
        <li><a href="/MyStuff/MySite/" style="padding: 6px;"><img src="./images/test.png" alt="test" style="width: 30.4px; height: 30.4px; border-radius: 50%; object-fit: cover;"></a></li>
        <li style="float: right"><a href="/MyStuff/MySite/">Back</a></li>
    </ul>
    <?php 
        if (!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]) {
            ?>
            <br>
            <div class="center-top">
                <form method="POST">
                    <div style="display: flex; flex-direction: column;">
                        <div class="tooltip">
                            <span class="tooltiptext">Just in case you forgot... Your username is ADMIN</span>
                            <label for="password">Username</label><br>
                            <input type="text" name="username" id="username" style="background: #6c6c6c59; outline: none; border-color: #000000; border-style: double; width:200px; color: var(--font);" autocomplete="off">
                        </div>
                        <br>
                        <div class="tooltip">
                            <span class="tooltiptext">Just in case you forgot... Your password is ADMINPASS</span>
                            <label for="password">Password</label><br>
                            <input type="password" name="password" id="password" style="background: #6c6c6c59; outline: none; border-color: #000000; border-style: double; width:200px; color: var(--font);" autocomplete="off">
                        </div>
                        <br>
                        <input type="submit" value="Log In" style="background: #6c6c6c59; outline: none; border-color: #000000; border-style: double; width:50px; color: var(--font); width: 207.8px; font-family: Mojang; font-weight: bold;">           
                    </div>
                </form>
            </div>

            <?php
            die("</body></html>");
        }
    ?>
    <!-- Admin panel dingen -->
    <?php include 'admincontent.php' ?>
</body>
</html>