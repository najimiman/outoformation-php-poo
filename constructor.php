<?php
class Stagaire{
    public $Nom;
    public $Prenom;

    function __construct($Nom,$Prenom)
    {
        $this->Nom=$Nom;
        $this->Prenom=$Prenom;
    }
    function get_Nom(){
        return $this->Nom;
    }
    function get_Prenom(){
        return $this->Prenom;
    }
}

$afiche=new Stagaire('hadri','ilham');
echo $afiche->get_Nom();
echo '<br/>';
echo $afiche->get_Prenom();
?>