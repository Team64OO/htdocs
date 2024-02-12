<?php
function tijdOphalen(){
    if (isset($_POST["reset"])) $_POST=[];
    $array = [];
    if (isset($_POST["uren"]) && isset($_POST["minuten"])) {
        $uren = $_POST["uren"];
        $minuten = $_POST["minuten"];
    } else {
        $uren = (int)date('H');
        $minuten = (int)date('i');
    }

    return ['uren'=> $uren, 'minuten' => $minuten];
}