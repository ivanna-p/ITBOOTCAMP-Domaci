<?php

    $x = [ 
        ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
        ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
        ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
        ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
    ];
  // 1. Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
  
    $dodate_godine_staza = array_map(function($osoba){
        $osoba['godine_staza'] = mt_rand(1, 3);
        return $osoba;
    }, $x);

    print_r($dodate_godine_staza);


  // 2. Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
  
    usort($dodate_godine_staza, function($a, $b){
        if($a['godine_staza'] > $b['godine_staza']){
            return false;
        }elseif($a['godine_staza'] == $b['godine_staza']){
            return ($a['godine'] < $b['godine']);
        }else{    
            return true;
        }
    });

    function prikazi_osobu($osoba){
        echo "<p>".join(",", $osoba)."</p>";
    }
    for($i=0; $i<count($dodate_godine_staza); $i++){
        prikazi_osobu($dodate_godine_staza[$i]);
    }

   // 3. Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter)

    $max_godine_staza = max(array_column($dodate_godine_staza, 'godine_staza'));

    $najveci_staz = array_filter($dodate_godine_staza, function($osoba) use($max_godine_staza) {
        return $osoba['godine_staza'] === $max_godine_staza;
    });

    print_r($najveci_staz);

?>
