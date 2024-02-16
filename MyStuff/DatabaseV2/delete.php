<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET["id"];

    $conn = mysqli_connect("localhost", "root", "", "PHPDB");
    if (mysqli_connect_errno() || !$conn) {
        die(mysqli_connect_error());
    }

    $query = "DELETE FROM projects 
              WHERE id = '$id'";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    mysqli_close($conn);
    ?>
</body>

</html>