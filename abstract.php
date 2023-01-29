<?php
//exemple 1
// abstract class AA{
// abstract public function Seyhello();
// public function Hello(){
// echo 'hello';
// }
// }

// class GG extends AA{
// public function Seyhello(){

// }
// }

// $ll=new GG();
// $ll->Hello();
// print_r($ll);
//exemple 2

abstract class Makedevice{
abstract public function aa();
abstract public function bb();
abstract public function cc($c);
}

class AA extends Makedevice{
    public $persone;
    public function aa(){
        echo 'hello aa';
    }
    public function bb(){
        echo 'hello bb';
    }
    public function cc($f){
        $this->persone=$f;
        echo 'hello cc';
        echo '<br>';
        echo 'hello '.$f;
    }
}
$show=new AA();
$show->aa();
echo'<br>';
$show->bb();
echo'<br>';
$show->cc('iman');
// print_r($show);
?>