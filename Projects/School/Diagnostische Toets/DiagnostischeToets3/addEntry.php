<?php

$conn = mysqli_connect("localhost", "root", "", "top2000");
if (mysqli_connect_errno() || !$conn) { //connect met db
    die(mysqli_connect_error()); //geef error als db niet kan connecten
}

$name = (isset($_POST["name"])) ? $_POST["name"] : ""; //zet naam uit form in variabel
$country = (isset($_POST["country"])) ? $_POST["country"] : ""; //zet country uit form in variabel

if (isset($_POST["name"]) && isset($_POST["country"])) { //kijk of name en country gevuld zijn
    $query = "INSERT INTO artist (name, country) VALUES ('$name', '$country')"; //voer query uit
}
if (isset($_POST["name"]) && isset($_POST["country"])) { //kijk of name en country gevuld zijn
    if ($conn->query($query) === TRUE) { //als query is uitgevoerd
        echo "Item succesvol toegevoegd"; //succesvol toegevoegd
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error; //geef error
    }
}

mysqli_close($conn); //sluit verbinding
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
    <br><a href="/School/PHP/Diagnostische Toets/DiagnostischeToets3/">Terug naar database</a>
</body>

</html>