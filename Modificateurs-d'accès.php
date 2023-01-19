<?php
class Color {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Color();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR

class Color1 {
    public $name;
    public $color;
    public $weight;
  }
  
  $mango = new Color1();
  $mango->name = 'Mango'; // OK
  $mango->color = 'Yellow'; // OK
  $mango->weight = '300'; // OK
?>