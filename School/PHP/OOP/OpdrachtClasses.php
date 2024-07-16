<?php
class sportteams {
  // Properties
  public $naam;
  public $plaats;
  // Methods
  function add_team($naam, $plaats) {
    $this->naam = $naam;
    $this->plaats = $plaats;
  }
}

$objArray = [];
$obj = new sportteams();
$obj2 = new sportteams();
$obj->add_team('Team6400', 'Zwolle');
$obj2->add_team('Team2', 'Zwolle');
array_push($objArray, $obj);
array_push($objArray, $obj2);

foreach ($objArray as $value) {
  foreach ($value as $value2) {
    echo $value2 . " ";
  }
  echo "<br>";
}
?>