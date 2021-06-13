<!-- 2.	Napraviti klasu Jelo koja ima naslov, opis i niz sastojaka hrane. U konstruktoru se dobija naslov, opis i niz $podaci. 
Naslov i niz samo upisati u this, a preko niza $podaci napraviti niz objekata koji su tip SastojakHrane. 
Napraviti metode "prikazi" i metodu za "promeniMeru" za promenu mere jednog sastojka.   -->
<?php

    require_once "SastojakHrane.php";
    require_once "podaci.php";

    class Jelo {

        public $naslov, $opis, $niz_sastojaka;

        function __construct($naslov, $opis, $podaci) {
            $this -> naslov = $naslov;
            $this -> opis = $opis;
            $this -> niz_sastojaka = [];
           
            for($i=0; $i<count($podaci); $i++) {
                $sastojak = new SastojakHrane($podaci[$i]['naziv'], $podaci[$i]['mera'], $podaci[$i]['kalorije']);
                array_push($this -> niz_sastojaka, $sastojak);    
            }
        }

        public function prikazi() {
            echo $this -> naslov . "<br/> Sastojci:";
            for($i=0; $i<count($this -> niz_sastojaka); $i++) {
                $this -> niz_sastojaka[$i] -> prikazi();
            }
        }

        public function promeniMeru($sastojak, $nova_mera) {
            for($i=0; $i<count($this -> niz_sastojaka); $i++) {
                if($this -> niz_sastojaka[$i] -> naziv == $sastojak)
                    $this -> niz_sastojaka[$i] -> promeniMeru($nova_mera);
            }
        }
    }
?>
