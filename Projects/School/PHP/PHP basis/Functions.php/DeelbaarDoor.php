<?php

function SetDeeltal() {
    ?>
    <form method="GET">
        <label for="deeltal">Geef een deeltal op</label>
        <input type="number" id="deeltal" name="deeltal">
        <input type="submit"><br><br>
    </form>
    <?php
    if (isset($_GET["deeltal"])) {
        $deeltal = $_GET["deeltal"];
        return $deeltal;
    }
}

function DeelbaarDoor($deeltal) {
    if ($deeltal % 3 == 0 && $deeltal % 5 == 0) {
        return ("het getal is deelbaar door 3 en 5");
    } elseif ($deeltal % 3 == 0 && $deeltal % 5 != 0) {
        return ("het getal is deelbaar door 3, maar niet door 5");
    } elseif ($deeltal % 3 != 0 && $deeltal % 5 == 0) {
        return ("het getal is niet deelbaar door 3, maar wel door 5");
    } elseif ($deeltal % 3 != 0 && $deeltal % 5 != 0) {
        return ("het getal is niet deelbaar door 3 of 5");
    }
}
?>