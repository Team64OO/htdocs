<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>

<body>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "test");
    if (mysqli_connect_errno() || !$conn) {
        die(mysqli_connect_error());
    }

    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);
    $table = "<table border=\"2\" class=\"tables\">";
    $table .= "<tr><th>userID</th><th>username</th><th>email</th><tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $table .= '<tr><td>' . $row["userID"] . '</td><td>' . $row["username"] . '</td><td>' . $row["email"] . '</td></tr>';
    }
    $table .= "</table>";

    echo $table;

    mysqli_close($conn);
    ?>
</body>

</html>
