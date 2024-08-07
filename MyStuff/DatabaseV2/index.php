<?php
session_start();

$role = "user";
if (isset($_SESSION["role"])) {
    $role = $_SESSION["role"];
}

$conn = mysqli_connect("localhost", "root", "", "PHPDB");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$query = "SELECT * 
          FROM projects";

$result = mysqli_query($conn, $query);
$table = '<table border="2" class="tables">';
if ($role != "user") {
    $table .= "<tr><th>Name:</th><th class='descLimit'>Description:</th><th>Finished?</th><th>Location:</th><th>ID:</th><th>Actions:</th></tr>";
} elseif ($role == "user") {
    $table .= "<tr><th>Name:</th><th>Desc:</th><th>Finished?</th><th>Location:</th></tr>";
}
while ($row = mysqli_fetch_assoc($result)) {
    if ($row["finished"] == 1 || $row["finished"] == "True") {
        $finished = "<p style='color: green; padding: 0; margin: 0;'>yes</p>";
    } else {
        $finished = "<p style='color: red; padding: 0; margin: 0;'>no</p>";
    }
    if ($role != "user") {
        $table .= '<tr> <td>' . $row["name"] . '</td> <td class=\'descLimit\'>' . $row["description"] . '</td> <td>' . $finished .
        '</td> <td> <a href="' . $row["location"] . '" id="location">Visit Project</a> </td> <td>' . $row["id"] . '</td> <td> <div class="icons">
        <div class="tooltip"> <a href="http://127.0.1.3/MyStuff/DatabaseV2/update.php?id=' . $row['id'] . '"> 
        <i class="fi fi-sr-pencil"></i> </a> <span class="tooltiptext">Edit</span> </div> <div class="tooltip">
        <button onclick="showDeleteConfirm(' . $row["id"] . ')" style="cursor: pointer">
        <i class="fi fi-sr-trash"></i> </button> <span class="tooltiptext">Remove</span> </div> </div> </td> </tr>';
    } elseif ($role == "user") {
        $table .= '<tr> <td>' . $row["name"] . '</td> <td>' . $row["description"] . '</td> <td>' . $finished .
            '</td> <td> <a href="' . $row["location"] . '" id="location">Visit Project</a> </td> </tr>';
    }
}
$table .= "</table>";
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My projects database</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="../Mysite/images/test.png">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css" />
    <script src="script.js"></script>

</head>

<body>
    <div class="flex-center" style="flex-direction: column;">
        <div id="dragDiv">
            <div id="deleteConfirm">
                <p id="deleteConfirmHeader"></p>
                <div class="flex-center" style="gap: 40px; height: 30px;">
                    <button onclick="hideDeleteConfirm()">
                        <p id="deleteConfirmNo">No</p>
                    </button>
                    <a href="http://127.0.1.3/MyStuff/DatabaseV2/delete.php?id=">
                        <p id="deleteConfirmYes">Yes</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="page">
            <div class="flex-center">
                <?php if ($role != "user") { ?>
                    <div class=" content">
                        <div class="moveToPage"><a href="http://127.0.1.3/MyStuff/DatabaseV2/insert.php">Add Entry</a></div>
                    </div>
                    <?php
                }
                if (isset($_SESSION["loggedIn"])) {
                    if ($_SESSION["loggedIn"]) { ?>
                        <div class="content">
                            <div class="moveToPage" id="logOut"><a href="http://127.0.1.3/MyStuff/DatabaseV2/logout.php">Log Out</a></div>
                        </div>
                    <?php }
                } else { ?>
                    <div class="content">
                        <div class="moveToPage" id="toLoginPage"><a href="http://127.0.1.3/MyStuff/DatabaseV2/login.php">Log in</a></div>
                    </div>
                <?php }
                ?>
            </div>
            <div class="content">
                <?php
                echo $table;
                ?>
            </div>

        </div>
    </div>
    <script src="./dragDivScript.js"></script>
</body>

</html>