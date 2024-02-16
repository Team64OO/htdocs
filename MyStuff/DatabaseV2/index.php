<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My projects database</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="../Mysite/images/test.png">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css" />
</head>

<body>
    <div class="page">
        <div class="content">
            <div class="moveToPage"><a href="http://127.0.1.3/MyStuff/DatabaseV2/insert.php">Add entry</a></div>
        </div>
        <div class="content">
            <?php
            $conn = mysqli_connect("localhost", "root", "", "PHPDB");
            if (mysqli_connect_errno() || !$conn) {
                die(mysqli_connect_error());
            }

            $query = "SELECT * FROM projects";

            $result = mysqli_query($conn, $query);
            $table = '<table border="2" class="tables">';
            $table .= "<tr><th>Name:</th><th>Desc:</th><th>Finished?</th><th>Location:</th><th>Actions</th><tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                if ($row["finished"] == 1 || $row["finished"] == "True") {
                    $finished = "<p style='color: green; padding: 0; margin: 0;'>yes</p>";
                } else {
                    $finished = "<p style='color: red; padding: 0; margin: 0;'>no</p>";
                }
                $table .= '<tr> <td>' . $row["name"] . '</td> <td>' . $row["description"] . '</td> <td>' . $finished .
                    '</td> <td> <a href="' . $row["location"] . '" id="location">Visit Project</a> </td> <td> <div class="icons">
        <div class="tooltip"> <a href="http://127.0.1.3/MyStuff/DatabaseV2/update.php?id=' . $row['id'] . '">
        <i class="fi fi-sr-pencil"></i> </a> <span class="tooltiptext">Edit</span> </div> <div class="tooltip">
        <a href="http://127.0.1.3/MyStuff/DatabaseV2/delete.php?id=' . $row['id'] . '">
        <i class="fi fi-sr-trash"></i> </a> <span class="tooltiptext">Remove</span> </div> </div> </td> </tr>';
            }
            $table .= "</table>";

            echo $table;

            mysqli_close($conn);
            ?>
        </div>
        </ul>
</body>

</html>