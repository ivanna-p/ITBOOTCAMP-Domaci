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

        // Metoda prikazi_destinacije koja prikazuje sva putovanja (drzava, grad, datum_polaska, datum_povratka)

        function prikazi_destinacije(){
            $rezultat = $this -> izvrsi_select(
                "SELECT `drzava`, `grad`, `datum_polaska`, `datum_povratka` 
                FROM `putovanja` JOIN `destinacije` 
                ON putovanja.`id_destinacije`=destinacije.`id`;"
                );
            if($rezultat["uspesno"] == true){
                foreach($rezultat['niz'] as $putovanje){
                    echo $putovanje['drzava']." ".
                        $putovanje['grad']." ".
                        $putovanje['datum_polaska']." ".
                        $putovanje['datum_povratka']."<br />";
                }
            } else {
                die ("neuspesan upit: ".$rezultat['poruka']);
            }      
        }
        
        // Metoda prikazi_putnike prikazuje sve putnike i njihovo putovanje (ime_prezime, drzava, grad, datum_polaska, datum_povratka)

        function prikazi_putnike(){
            $rezultat = $this -> izvrsi_select(
                "SELECT CONCAT(putnici.ime, ' ', putnici.prezime) AS ime_prezime, drzava, grad, datum_polaska, datum_povratka
                FROM `putnici` JOIN `spisak_putnika`
                ON putnici.`broj_pasosa`=spisak_putnika.`broj_pasosa`
                JOIN `destinacije`
                ON id_destinacije=destinacije.id
                JOIN `putovanja`
                ON destinacije.id=putovanja.id"
            );
            if($rezultat["uspesno"] == true){
                foreach($rezultat['niz'] as $putovanje){
                    echo $putovanje['ime_prezime']." ".
                        $putovanje['drzava']." ".
                        $putovanje['grad']." ".
                        $putovanje['datum_polaska']." ".
                        $putovanje['datum_povratka']."<br />";
                }
            } else {
                die ("neuspesan upit: ".$rezultat['poruka']);
            }      
        }

        // Metoda otkazi_rezervaciju koja za dati broj_pasosa otkazuje sva njegova putovanja

        function otkazi_rezervaciju($broj_pasosa){
            $uspesno = $this -> conn -> query("DELETE FROM `spisak_putnika` WHERE broj_pasosa = $broj_pasosa");
            if($uspesno === false) {
                echo "Greska pri brisanju, kontaktirajte tehnicku podrsku!";
            } else {
                $broj_obrisanih = $this -> conn -> affected_rows;
                if($broj_obrisanih > 0) {
                    echo "Brisanje uspesno. Broj obrisanih rezervacija: $broj_obrisanih."."<br />";
                } else {
                    echo "Nema rezervacija za ovaj broj pasosa."."<br />";
                }
            }
        }
    }
?>