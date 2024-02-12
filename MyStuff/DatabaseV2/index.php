<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "PHPDB");
    if (mysqli_connect_errno() || !$conn) {
        die(mysqli_connect_error());
    }
    
    $query = "SELECT * FROM projects";
    
    $result = mysqli_query($conn, $query);
    $table = '<table border="2" class="tables">';
    $table .= "<tr><th>Name:</th><th>Desc:</th><th>Finished?</th><th>ID</th><tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row["finished"] == 1) {
            $finished = "yes";
        } else {
            $finished = "no";
        }
        $table .= '<tr><td>' . $row["name"] . '</td><td>' . $row["description"] . '</td><td>' . $finished . '</td><td>' . $row["id"] . '</td><a href="/School/PHP/Diagnostische Toets/DiagnostischeToets3/addEntry.php"></a></tr>';
    }
    $table .= "</table>";

    echo $table;

    mysqli_close($conn);
    ?>
</body>

</html>