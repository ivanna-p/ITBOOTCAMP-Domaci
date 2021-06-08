<?php
   echo "<p>1.</p>";

   class Krevet{

      public $duzina, $sirina, $materijal;
      private $cena;

        public function __construct($duzina, $sirina, $materijal, $cena) {
            $this -> duzina = $duzina;
            $this -> sirina = $sirina;
            $this -> materijal = $materijal;
            $this -> cena = $cena;
        }

      public function ucitajCenu() { return $this -> cena; }

      public function __toString() {
         return "Krevet je duzine ".
            $this -> duzina." i sirine ".
            $this -> sirina.", napravljen od materijala: ".
            $this -> materijal.", po ceni ".
            $this -> cena.".";
      }

      public function popust($procenat){
         $this -> cena = $this -> cena - ($this -> cena / 100 * $procenat);
      }

   }

   $krevet = new Krevet(30, 23, 'Hrast', 60000);
   echo $krevet;

   echo "<p>2.</p>";

   $kreveti = [
      new Krevet(40, 15, 'Plastika', mt_rand(40000, 50000)),
      new Krevet(30, 25, 'Aluminijum', mt_rand(40000, 50000)),
      ];

   $najskuplji_krevet = array_reduce(
      $kreveti, 
      function($a, $b){
         if($a -> ucitajCenu() > $b -> ucitajCenu()){
            return $a;
         } else {
            return $b;
         }
      },
      $kreveti[0]
   );

   echo $najskuplji_krevet;

   echo "<p>3.</p>";

   $novi_krevet = new Krevet(36, 28, 'Orah', 50000);
   echo $novi_krevet;
   echo "<br />";
   $novi_krevet -> popust(10);
   echo $novi_krevet;

?>
