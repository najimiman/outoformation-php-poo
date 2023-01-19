<?php
class Fruit {
    public $name;
    function set_name($name) {
      $this->name = $name;
    }
  }

  class Persone{
    public $Nom;
    public $Prenom;
    function set_Nom($Nom){
        $this->Nom=$Nom;
    }
    function set_Prenom($Prenom){
        $this->Prenom=$Prenom;
    }
    function get_Nom(){
        return $this->Nom;
    }
    function get_Prenom(){
        return $this->Prenom;
    }
  }
  $apple = new Fruit();
  $apple->set_name("Apple");
  echo $apple->name;

  $affiche=new Persone();
  $affiche->set_Nom('najim');
  $affiche->set_Prenom('iman');
  echo '<br/>';
  echo 'nom est:'.$affiche->get_Nom();
  echo '<br/>';
  echo 'prenom est:'.$affiche->get_Prenom();
?>