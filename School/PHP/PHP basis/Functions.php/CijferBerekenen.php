<?php
function SetPunten (){
    if (isset($_GET["maxPunten"]) && isset($_GET["behaaldePunten"])) {
        $array = [];
        $maxPunten = $_GET["maxPunten"];
        $behaaldePunten = $_GET["behaaldePunten"];
        return ['behaaldePunten' => $behaaldePunten, 'maxPunten' => $maxPunten];
    }
}

function BerekenCijfer (array $punten) {
    $maxPunten = $punten["maxPunten"];
    $behaaldePunten = $punten["behaaldePunten"];
    return ("Het behaalde cijfer is " . $behaaldePunten / $maxPunten * 9 + 1);
}

function PrintCijfer() {
    $punten = SetPunten();
    ?>
    <form method="GET">
        <label for="maxPunten">Wat is het maximale aantal punten</label>
        <input type="number" id="maxPunten" name="maxPunten">
        <br>
        <label for="behaaldePunten">Wat is het behaalde aantal punten</label>
        <input type="number" id="behaaldePunten" name="behaaldePunten">
        <input type="submit">
    </form>
    <br><br>
    <?php
    if (isset($_GET["maxPunten"]) && isset($_GET["behaaldePunten"]) && $_GET["maxPunten"] >= $_GET["behaaldePunten"] && $_GET["maxPunten"] != 0) {
        return (BerekenCijfer($punten));
    } elseif (isset($_GET["maxPunten"]) && isset($_GET["behaaldePunten"]) && $_GET["maxPunten"] < $_GET["behaaldePunten"]) {
        return ("je kan niet meer punten hebben dan het maximale aantal punten");
    }
}
?>