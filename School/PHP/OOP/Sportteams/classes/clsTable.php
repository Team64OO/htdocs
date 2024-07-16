<?php

namespace table;

class table
{
    public string $table = "<table>";
    public array $headers = [];

    function __construct($headers)
    {
        $this->table .= "<tr>";
        foreach ($headers as $header) {
            $this->table .= "<th>" . $header . "</th>";
        }
        $this->table .= "</tr>";
    }

    function addToTable($value)
    {
        $this->table .= "<td>" . $value . "</td>";
        return $this->table;
    }

    function finishTable()
    {
        $this->table .= "</tr></table>";
        return $this->table;
    }
}
