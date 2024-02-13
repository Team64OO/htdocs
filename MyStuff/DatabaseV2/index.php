<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <ul>
        <li><div class="addEntry"><a href="http://127.0.1.3/MyStuff/DatabaseV2/insert.php">Add entry</a></div></li>
        <li>
        <?php
    $conn = mysqli_connect("localhost", "root", "", "PHPDB");
    if (mysqli_connect_errno() || !$conn) {
        die(mysqli_connect_error());
    }
    
    $query = "SELECT * FROM projects";
    
    $result = mysqli_query($conn, $query);
    $table = '<table border="2" class="tables">';
    $table .= "<tr><th>Name:</th><th>Desc:</th><th>Finished?</th><th>ID</th><th>Location:</th><th>Actions</th><tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["finished"] == 1) {
            $finished = "yes";
        } else {
            $finished = "no";
        }
        $table .= '<tr> <td>' . $row["name"] . '</td> <td>' . $row["description"] . '</td> <td>' . $finished . '</td> <td>' . 
        $row["id"] . '</td> <td> <a href="' . $row["location"] . '">Visit Project</a> </td> <td> <div class="icons">
        <div class="tooltip"> <a href="http://127.0.1.3/MyStuff/DatabaseV2/update.php?id=' . $row['id'] . '>
        <span class="material-symbols-outlined">edit</span> </a> <span class="tooltiptext">Edit</span> </div> <div class="tooltip">
        <a href="http://127.0.1.3/MyStuff/DatabaseV2/update.php?id=' . $row['id'] . '>
        <span class="material-symbols-outlined">delete</span> </a> <span class="tooltiptext">Remove</span> </div> </div> </td> </tr>';
    }
    $table .= "</table>";
    
    echo $table;
    
    mysqli_close($conn);
    ?>
    </li>
</ul>
</body>

</html>