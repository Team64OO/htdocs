<?php

$conn = mysqli_connect("localhost", "root", "", "top2000");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$query = "SELECT * FROM artist";

$result = mysqli_query($conn, $query);
$table = "<table border=\"2\" class=\"tables\">";
$table .= "<tr><th>id</th><th>name</th><th>country</th><th>year</th><tr>";

while ($row = mysqli_fetch_assoc($result)) {
    $table .= '<tr><td>' . $row["id"] . '</td><td>' . $row["name"] . '</td><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td><a href="/School/PHP/Diagnostische Toets/DiagnostischeToets3/addEntry.php"></a></tr>';
}
$table .= "</table>";

if (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["country"]) && isset($_POST["year"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $country = $_POST["country"];
    $year = $_POST["year"];
    $query = "UPDATE artist 
              SET id = '$id', name = '$name', country = '$country', year = '$year'
              WHERE id = '$id'";
    if ($conn->query($query) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="./style.css">
    <script src="script.js"></script>
</head>

<body>
    <?php echo $table; ?>
    <div class="flex" id="update">
        <br><a href="/School/Diagnostische Toets/DiagnostischeToets4/addEntry.php">Voeg item toe</a>
        <p id="button" onclick="edit();">Update database</p>
    </div>
    <div id="edit">
        <form method="POST" action="index.php" onsubmit="return checkForm(this);">
            <div class="flex" id="content">
                <input type="number" id="id" name="id" placeholder="id" data-required></input>
                <input type="text" id="name" name="name" placeholder="name" data-required></input>
                <input type="text" id="country" name="country" placeholder="country" data-required></input>
                <input type="number" id="year" name="year" placeholder="year (between 1940 and 2024)" data-required></input>
                <input type="submit" value="UPDATE"></input>
            </div>
        </form>
        <h3>Refresh om de database te updaten als je een update hebt uitgevoerd.</h3>
        <h2 id="errormsg"></h2>
    </div>
</body>

</html>