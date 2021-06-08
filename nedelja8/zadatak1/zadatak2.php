<?php
    require_once ('zadatak1.php');

    echo "<p>Zadatak 2.</p>";

    class Baldahin extends Krevet{

        public $visina, $cenaBaldahina;

        public function __construct($duzina, $sirina, $materijal, $cena, $visina, $cenaBaldahina){
            $this -> visina = $visina;
            $this -> cenaBaldahina = $cenaBaldahina;
            parent::__construct($duzina, $sirina, $materijal, $cena);
        }

        public function __toString(){
            return "Cena kreveta bez baldahina je ".
            parent::ucitajCenu().
            ", dok je cena sa baldahinom ".
            parent::ucitajCenu()+
            $this -> cenaBaldahina.".";
        }
    }

    $krevet_sa_baldahinom = new Baldahin(250, 100, 'Orah', 40000, 50, 10000);
    echo $krevet_sa_baldahinom;
?>
