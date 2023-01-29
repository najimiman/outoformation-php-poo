<?php
// exemple1
// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
// }

// echo Goodbye::LEAVING_MESSAGE;
// exemple2
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

<!-- Ou, nous pouvons accéder à une constante depuis l'intérieur de 
la classe en utilisant le mot- selfclé suivi de l'opérateur 
de résolution de portée ( ::) suivi du nom de la constante -->