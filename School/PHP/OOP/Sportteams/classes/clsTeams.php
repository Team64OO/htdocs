<?php

namespace teams;
class Teams
{
    private string $naam;
    private string $code;
    private string $plaats;

    public function __construct(string $naam, string $code, string $plaats)
    {
        $this->naam = $naam;
        $this->code = $code;
        $this->plaats = $plaats;
    }

    public function setNaam(string $naam)
    {
        $this->naam = $naam;
    }

    public function setCode(string $code)
    {
        $this->naam = $code;
    }

    public function setPlaats(string $plaats)
    {
        $this->naam = $plaats;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getPlaats()
    {
        return $this->plaats;
    }
}
