<?php
// exemple 1
// class Animal {
//   public $nom;
//   public $prenom;
//   public function __construct($nom, $prenom) {
//     $this->nom = $nom;
//     $this->prenom = $prenom; 
//   }
//   public function intro() {
//     echo "nom est {$this->nom} prenom est {$this->prenom}."; 
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Animal {
//   public function message() {
//     echo "nom  et prenom: "; 
//   }
// }

// $strawberry = new Strawberry("nori", "chat");
// $strawberry->message();
// $strawberry->intro();

//exemple 2
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();
?>