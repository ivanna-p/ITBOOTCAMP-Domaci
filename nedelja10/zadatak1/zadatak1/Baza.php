<?php
        // Konstruktor ima konekciju sa bazom

    class Baza{

        public $conn;

        function __construct($baza){
            $this -> conn = new mysqli('localhost', 'root', '', 'turisticka_agencija');
            if ($this->conn->connect_error)
                die('Greska: '. $conn->connect_error);
        }

        // Metoda izvrsi_select izvrsava neki select upit i vraca rezultate

        function izvrsi_select($upit){
            $podaci_o_upitu = $this -> conn -> query($upit);
            if($podaci_o_upitu === false) {
                return [
                    'uspesno '=> false, 
                    'poruka' => $this -> conn -> error
                ];
            } else {
                $niz = $podaci_o_upitu -> fetch_all(MYSQLI_ASSOC);
                return [
                    'uspesno' => true, 
                    'niz' => $niz
                ];
            }
        }

        // Metoda koja za datu drzavu i grad vraca id te destinacije

        function dobavi_id_destinacije($drzava, $grad) {
            $rezultat = $this -> izvrsi_select(
                "SELECT id 
                FROM destinacije 
                WHERE drzava = '$drzava' 
                AND grad = '$grad'"
                );
            if($rezultat['uspesno'] == true) {
                return $rezultat['niz'][0]['id'];
            } else {
                die("Upit nije izvrsen: " . $rezultat['poruka']);
            }
        }

        // Metoda koja za dati id destinacije pronalazi sva putovanja sa tom destinacijom

        function dobavi_putovanja($id_destinacije) {
            $rezultat = $this -> izvrsi_select(
                "SELECT * 
                FROM `putovanja`
                WHERE `id_destinacije` = $id_destinacije"
                );
            if($rezultat['uspesno'] == true) {
                return $rezultat['niz'];
            } else {
                die("Upit nije izvrsen: " . $rezultat['poruka']);
            }
        }

        // Metoda koja za dati id putovanja brise sve aranzmane iz spiska putnika koji su zakazali to putovanje.

        function obrisi_putovanje($id_putovanja){
            $rezultat = $this -> conn -> query(
                "DELETE FROM `spisak_putnika`
                WHERE id_putovanja = $id_putovanja"
                );
            if($rezultat === false) {
                die('Upit nije izvrsen: ' . $this -> conn -> error);
            } else {
                echo "Upit je uspesno izvrsen.";
            }
        }
    }

    $baza = new Baza('turisticka_agencija');
    ?>
