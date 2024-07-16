<?php 

class class1
{
    public $property;

    public function __construct($text)
    {
        $this->property = $text;
    }

    public function setProperty($property)
    {
        $this->property = $property;
    }

    public function getProperty()
    {
        return $this->property;
    }
}