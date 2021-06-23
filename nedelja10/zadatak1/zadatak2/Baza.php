<?php
    
    // Napraviti stranicu za prikaz liste proizvoda. Svaki proizvod ima dugme kupi. Dugme pripada formi koja ima i skriveno polje proizvod_id. Forma poziva skriptu koja snima proizvod u niz stavke_korpe u sesiji:
	// - ako proizvod sa tim id-em ne postoji u nizu, onda cita podatke proizvoda sa tim id-em iz baze i upisuje id, naziv, cenu i kolicinu 1 u niz stavke_korpe u sesiji. 
	// - ako proizvod sa tim id-em vec postoji u nizu stavke_korpe, onda dodaje 1 na kolicinu

    class Baza {

        public $conn;

        function __construct($baza){
            $this -> conn = new mysqli('localhost', 'root', '', $baza);
            if ($this -> conn -> connect_error){
                die ('Greska: '.$conn->connect_error);
            }
        }

        function izvrsi_upit($upit){
            $podaci = $this -> conn -> query($upit);
            if($podaci === false) {
                return [
                    'uspesno' => false,
                    'poruka' => $this -> conn -> error
                ];
            } else {
                $niz = $podaci -> fetch_all(MYSQLI_ASSOC);
                return [
                    'uspesno' => true,
                    'niz' => $niz
                ];
            }
        }

        function dobavi_proizvode(){
            $r = $this->izvrsi_upit("SELECT * FROM `proizvodi`");
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

        function dobavi_proizvod(){
            $r = $this->izvrsi_upit( 
                "SELECT * 
                FROM `proizvodi`
                WHERE `id` = '$id'"
                );
            if($r['uspesno'] == true){
                return $r['niz'];
            }else{
                die("Neuspesan upit: ".$r['poruka']);
            }
        }

    }

    $b = new Baza("6414_nedelja10_zadatak_1_2");
?>
