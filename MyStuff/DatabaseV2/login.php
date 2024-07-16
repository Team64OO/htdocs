<?php session_start();
$conn = mysqli_connect("localhost", "root", "", "PHPDB");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$username = (isset($_POST["username"])) ? $_POST["username"] : "";
$password = (isset($_POST["password"])) ? $_POST["password"] : "";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $query = "SELECT * 
                  FROM users
                  WHERE username = '$username'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $passwordVerified = password_verify($password, $row["password"]);
        if ($passwordVerified) {
            $_SESSION["role"] = $row["role"];
            $_SESSION["loggedIn"] = true;
            header("Location: index.php");
        }
        if (!$passwordVerified) {
            $output = "wrongData";
        }
    }
    if (mysqli_num_rows($result) == 0) {
        $output = "wrongData";
    }
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Mysite/images/test.png">
    <title>Database login</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./script.js"></script>
</head>

<body>
    <div class="page">
        <div class="content">
            <div class="moveToPage" id="backFromInsert"><a href="http://127.0.1.3/MyStuff/DatabaseV2/">Back to database</a></div>
        </div>
        <div class="flex-center">
            <div class="content">
                <form method="POST" onsubmit="return checkForm(this)" autocomplete="off">
                    <div class="flex-column" id="loginForm">
                        Log In
                        <input type="text" id="username" name="username" placeholder="username:" onblur="checkText(this)" data-required>
                        <input type="password" id="password" name="password" placeholder="password:" onblur="checkText(this)" data-required>
                        <input type="submit" id="loginSubmit" value="Log In">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex-center">
        <div id="outputmsg"></div>
    </div>
    <?php if (isset($output)) {
        if ($output == "wrongData") {
    ?> <script>
                document.getElementById("outputmsg").innerHTML = "Combination of username and password is incorrect"
            </script><?php
                    }
                } ?>
</body>

</html>