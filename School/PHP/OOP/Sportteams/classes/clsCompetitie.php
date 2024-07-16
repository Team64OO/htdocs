<?php

namespace competitie;
class competitie
{
    private int $jaartal;
    private array $teams = [];

    public function __construct(int $jaartal)
    {
        $this->jaartal = $jaartal;
    }

    public function setJaartal(int $jaartal)
    {
        $this->jaartal = $jaartal;
    }

    public function getJaartal()
    {
        return $this->jaartal;
    }

    public function addToCompetitie(string $naam) {
        array_push($this->teams, $naam);
    }

    public function getCompetitie() {
        return $this->teams;
    }
}