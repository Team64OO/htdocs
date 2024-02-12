<?php

class Tijd {
    private $minuten = 0;
    private $uren = 0;
    function init($uren, $minuten) {
        $this->uren = $uren;
        $this->minuten = $minuten;
    }
    function print() {
        print($this->uren . " " . $this->minuten);
    }
}