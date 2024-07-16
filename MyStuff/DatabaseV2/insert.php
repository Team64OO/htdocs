<?php
session_start();
if ($_SESSION["loggedIn"]) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="icon" href="../Mysite/images/test.png">
        <script src="./script.js"></script>
    </head>

    <body>
        <div class="page">
            <div class="content">
                <div class="moveToPage" id="backFromInsert"><a href="http://127.0.1.3/MyStuff/DatabaseV2/">Back to database</a></div>
            </div>
            <div class="content">
                <form method="POST" onsubmit="return checkForm(this);" autocomplete="off">
                    <div class="flex-column" id="insertForm">
                        <label for="name">Name of the project</label>
                        <input type="text" id="name" name="Name" placeholder="Name:" onblur="checkText(this);" data-required>
                        <label for="desc">Description of the project</label>
                        <textarea id="desc" name="Desc" placeholder="Description:"></textarea>
                        <label for="finished">Is the project finished?</label>
                        <select id="finished" name="Finished" data-required>
                            <option value="True">Yes</option>
                            <option value="False">No</option>
                        </select>
                        <label for="location">Location of the project</label>
                        <input type="text" id="location" name="Location" placeholder="Location:" onblur="checkText(this);" data-required>
                        <input type="submit" value="INSERT">
                    </div>
                </form>
            </div>
        </div>

        <?php

        $conn = mysqli_connect("localhost", "root", "", "PHPDB");
        if (mysqli_connect_errno() || !$conn) {
            die(mysqli_connect_error());
        }

        $name = (isset($_POST["Name"])) ? $_POST["Name"] : "";
        $desc = (isset($_POST["Desc"])) ? $_POST["Desc"] : "";
        $finished = (isset($_POST["Finished"])) ? $_POST["Finished"] : "";
        $location = (isset($_POST["Location"])) ? $_POST["Location"] : "";
        if (isset($_POST["Name"]) && isset($_POST["Finished"]) && isset($_POST["Location"])) {
            $query = "INSERT INTO projects (name, description, finished, location) 
                  VALUES ('$name', '$desc', '$finished', '$location')";
        }
        if (isset($_POST["Name"]) && isset($_POST["Finished"]) && isset($_POST["Location"])) {
            if ($conn->query($query) === TRUE) {
                header("location: index.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

        mysqli_close($conn);
        ?>
        <div class="flex-center">
            <div id="outputmsg"></div>
        </div>
    </body>

    </html>

<?php } else {
    header("Location: index.php");
} ?>