<?php

class Phone {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function __destruct() {
      echo "this name is {$this->name} and the color is {$this->color}.";
      echo '<br/>';
    }
    function aa(){
        echo " {$this->name} {$this->color}.";
    }
    function bb(){
        echo "{$this->name} {$this->color}.";
    }
  }
  $apple = new Phone("Iphone", "red");
  $a = new Phone("oppo", "black");
  $p=new Phone('Iphone10','red');

  
// Si vous créez une __destruct()fonction, PHP appellera automatiquement cette fonction à la fin du script.
  //resulta
// this name is Iphone10 and the color is red.
// this name is oppo and the color is black.
// this name is Iphone and the color is red.

?>