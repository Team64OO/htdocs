<?php

$conn = mysqli_connect("localhost", "root", "", "top2000");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$query = "SELECT * FROM artist";

$result = mysqli_query($conn, $query);
$table = "<table border=\"2\" class=\"tables\">";
$table .= "<tr><th>id</th><th>name</th><th>country</th><tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $table .= '<tr><td>' . $row["id"] . '</td><td>' . $row["name"] . '</td><td>' . $row["country"] . '</td><td><a "href=/School/PHP/Diagnostische Toets/DiagnostischeToets3/addEntry.php"></a><i></i></td></tr>';
}
$table .= "</table>";


mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Database</title>
    </head>
    
    <body>
        <?php echo $table; ?>
        <br><a href="/School/PHP/Diagnostische Toets/DiagnostischeToets3/addEntry.php">Voeg item toe</a>
</body>

</html>