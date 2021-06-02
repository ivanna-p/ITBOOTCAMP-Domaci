<?php
    function nema_nule($niz){
        return array_search(0, $niz) === false;
    }

    $test = [3, 4, 6, 242, 3, -1, 0];
    echo join(" ", $test)."<br />";
    
    if(nema_nule($test)){
        echo "Ne postoji 0 u nizu.";
    } else {
        echo "Niz sadrzi 0.";
    }

?>