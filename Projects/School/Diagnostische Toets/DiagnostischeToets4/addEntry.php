<?php

$conn = mysqli_connect("localhost", "root", "", "top2000");
if (mysqli_connect_errno() || !$conn) {
    die(mysqli_connect_error());
}

$name = (isset($_POST["name"])) ? $_POST["name"] : "";
$country = (isset($_POST["country"])) ? $_POST["country"] : "";

if (isset($_POST["name"]) && isset($_POST["country"])) {
    $query = "INSERT INTO artist (name, country) VALUES ('$name', '$country')";
}
if (isset($_POST["name"]) && isset($_POST["country"])) {
    if ($conn->query($query) === TRUE) {
        echo "Item succesvol toegevoegd";
    } else {
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
    <title>Voeg Items Toe</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="name" autocomplete="off" placeholder="name:" required>
        <input type="text" name="country" autocomplete="off" placeholder="country:" required>
        <input type="submit" value="Voeg Toe" style="width: 80px;">
    </form>
    <h2>Disclaimer: Alle code is gekopiërd van de vorige toets en dit deel is niet veranderd.</h2>
    <br><a href="/School/Diagnostische Toets/DiagnostischeToets4/">Terug naar database</a>
</body>

</html>