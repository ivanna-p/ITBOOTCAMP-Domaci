<?php
    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"],
    ];

    //1. Dodati u gornji niz jos 4 osobe po zelji.

    $cetiri_osobe = [ 
        ['ime'=>"Bogdan", "godine"=>29, "grad"=>"Nis", "pozicija"=>"dizajner"],
        ['ime'=>"Mihajlo", "godine"=>30, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Bojan", "godine"=>35, "grad"=>"Bor", "pozicija"=>"programer"],
        ['ime'=>"Andjela", "godine"=>23, "grad"=>"NS", "pozicija"=>"menadzer"],
    ];

    $x = array_merge($x, $cetiri_osobe);
    print_r($x);

    //2. Napisati f-ju koja prikazuje imena svih programera.

    function programeri($x){
        $ime = "";
        for($i=0; $i<count($x); $i++){
            if($x[$i]['pozicija'] == 'programer'){
                $y = $x[$i]['ime'];
                $ime .= $y." ";
            }
        }
        echo "<p> Programeri su: $ime</p>";
    }
    programeri($x);

    //3. Napisati f-ju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.

    function prikazi_osobu($osoba){
        echo "Ime osobe je ".$osoba['ime'].", starosti ".$osoba['godine']." godina, mesto stanovanja je ".$osoba['grad'].", radi kao ".$osoba['pozicija'].".";
    }

    foreach($x as $osoba){
        if(strpos(strtolower($osoba['ime']), 's') !== false){
            prikazi_osobu($osoba);
            echo "<br />";
        }
    }
?>
