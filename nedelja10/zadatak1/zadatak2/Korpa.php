<?php
    session_start();

    if(!isset($_SESSION['stavke_korpe'])){
        $_SESSION['stavke_korpe'] = [];
    }

    class Korpa {
        function __construct() {
            $this -> stavke_korpe = $_SESSION['stavke_korpe'];
        }
        
        function dodaj_proizvod($id, $naziv, $cena, $kolicina) {
            $pronadjena_stavka = false;
            for($i = 0; $i < count($this -> stavke_korpe); $i++) {
                if($this -> stavke_korpe[$i]['id'] == $id) {
                    $this -> promeni_kolicinu($id, $kolicina);
                    $pronadjena_stavka = true;
                    break;
                }
            }
            if($pronadjena_stavka == false){
                $novi_proizvod = [
                'id' => $id,
                'naziv' => $naziv,
                'cena' => $cena,
                'kolicina' => $kolicina
                ];
                array_push($this -> stavke_korpe, $novi_proizvod);
            }
            $_SESSION['stavke_korpe'] = $this -> stavke_korpe;
        }

        function promeni_kolicinu($id, $kolicina) {
            for($i = 0; $i < count($this -> stavke_korpe); $i++) {
                if($this -> stavke_korpe[$i]['id'] == $id) {
                    $this -> stavke_korpe[$i]['kolicina'] += $kolicina;
                }
            }
            $_SESSION['stavke_korpe'] = $this -> stavke_korpe;
        }

        function obrisi_proizvod($id) {
            for($i = 0; $i < count($this -> stavke_korpe); $i++) {
                if($this -> stavke_korpe[$i]['id'] == $id) {
                    array_splice($this -> stavke_korpe, $i, 1);
                }
            }
            $_SESSION['stavke_korpe'] = $this -> stavke_korpe;
        }
    }

    $korpa = new Korpa();

    // $korpa -> dodaj_proizvod(1, 'Sampon', 500, 2);
    // $korpa -> dodaj_proizvod(2, 'Kupka', 400, 3);
    // $korpa -> dodaj_proizvod(3, 'Sapun', 200, 4);
    // $korpa -> dodaj_proizvod(4, 'Voda', 70, 1);
    // $korpa -> dodaj_proizvod(5, 'Kinder jaje', 110, 5);
    // print_r($korpa);

    // $korpa -> promeni_kolicinu(2, 6);
    // $korpa -> obrisi_proizvod(1);

    // echo "<p> Provera nakon izmene i brisanja: </p>";
    // print_r($korpa);
?>