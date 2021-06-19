<?php
    include "Baza.php";

    $baza = new Baza('turisticka_agencija');

    $rezultat = $baza -> izvrsi_select('SELECT count(id) AS broj_rezervacija FROM `spisak_putnika`');
    if($rezultat["uspesno"] == true){
        echo "Broj rezervacija je: ".$rezultat['niz'][0]['broj_rezervacija'];
    } else {
        die ("neuspesan upit: ".$rezultat['poruka']);
    } 
    echo "<br />";
    $baza -> prikazi_destinacije();
    echo "<br />";
    $baza -> prikazi_putnike();
    echo "<br />";
    $baza -> otkazi_rezervaciju('20123456');
?>