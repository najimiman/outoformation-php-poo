<?php
//exemple1
// class greeting {
//     public static function welcome() {
//       echo "Hello World!";
//     }
//   }
  
//   // Call static method
//   greeting::welcome();
//exemple2
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();
?>
<!-- Les méthodes statiques peuvent être appelées directement - 
sans créer d'abord une instance de la classe -->