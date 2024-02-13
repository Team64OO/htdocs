<!DOCTYPE html>
<html>
<style>
body {
    background-color: aqua;
}
</style>
<form action="UserRepeat.php" method="GET">
<label for="Begingetal">Wat is het begingetal?</label>
<input type="number" id="Begingetal" name="begingetal"><br>
<label for="Eindegetal">Wat is het eindgetal?</label>
<input type="number" id="Eindgetal" name="eindgetal"><br>
<input type="submit">



<?php
if (isset($_GET["eindgetal"])) {
    if (isset($_GET["begingetal"])) {
        $verschil = $_GET["eindgetal"] - $_GET["begingetal"];
        if ($verschil < 0) {
            $verschil = $verschil * -1;
        } 
        print("<h3>Het verschil tussen het begin- en het eindgetal is $verschil");
        for ($i=0; $i < $verschil; $i++) { 
            print(".");
        }
    }
}
?>
