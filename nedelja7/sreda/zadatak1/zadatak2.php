<?php
    $niz = [3, 4, 7, 14, 46, 23, 32, 5, 2, 87];

    $zbir = 0;
    for($i=0; $i<count($niz); $i++){
        $zbir += $i;
    }
    $aritmeticka_sredina = $zbir/count($niz);

    echo "Aritmeticka sredina niza je je: $aritmeticka_sredina"."<br />";

    $novi = [];
    for($i=0; $i<count($niz); $i++){
        if($niz[$i] > $aritmeticka_sredina){
            array_push($novi, $niz[$i]);
        }
    }
    echo "Brojevi u nizu veci od aritmeticke sredine su: ".join(",", $novi)."<br />";
?>