<?php

class database
{
    private array $info;
    private $error = false;
    private $errorMsg = null;
    private $count = null;
    
    function __construct($query)
    {
        $this->info = parse_ini_file('database.ini');
    }
    
    public function getSQL($query)
    {
        $conn = mysqli_connect($this->info["host"], $this->info["user"], $this->info["pass"], $this->info["db"]);
        if (mysqli_connect_errno() || !$conn) {
            $this->error = true;
            $this->errorMsg = "An unexpected error occurred";
            die($this->errorMsg);
        }

        $result = mysqli_query($conn, $query);
        $table = "<table>";
        $table .= "<tr><th>id</th><th>name</th><th>country</th><th>year</th><tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            $table .= '<tr><td>' . $row["id"] . '</td><td>' . $row["name"] . '</td><td>' . $row["country"] . '</td><td>' . $row["year"] . '</td></tr>';
        }
        $table .= "</table>";

        $this->count = mysqli_num_rows($result);

        return $table;
    }

    public function getCount()
    {
        return $this->count;
    }
}
