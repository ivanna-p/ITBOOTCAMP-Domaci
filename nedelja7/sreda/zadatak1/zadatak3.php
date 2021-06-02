<?php
    //a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz

    function ucitavanje_niza(){
        return explode(" ", $_GET['niz']);
    }
    
    $input = ucitavanje_niza();

    // b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.

    function niz_ima_najmanje_tri_parna_broja($x) {
        $parni = [];
        foreach($x as $value){
            if($value %2 == 0){
                array_push($parni, $value);
            }
        }
        return count($parni) >= 3;
    }

    // c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.
    
    function brojevi_manji_od_hiljadu($niz){
        foreach ($niz as $value) {
            if($value > 1000){
                return false;
            }
        }
        return true;
    }

    // d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna.  -->

    if(niz_ima_najmanje_tri_parna_broja($input)){
        if(brojevi_manji_od_hiljadu($input)){
            echo "Niz ima najmanje tri parna broja i svi brojevi su manji od hiljadu.";
        } else {
            echo "Neki od brojeva je veci od hiljadu!";
        }
    } else {
        echo "Niz nema najmanje tri parna broja!";
    }

?>