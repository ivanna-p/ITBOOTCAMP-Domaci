<?php
    $uspesnost = ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'>28, 'petak'=>28];

    function evaluacija($niz){
        $prosecna_uspesnost_zbir = 0;
        foreach($niz as $key => $value){
            $prosecna_uspesnost_zbir += $value;
        }

        $max_uspesnost = max($niz);
        $dan = array_search($max_uspesnost, $niz);
        echo "Najuspesniji dan je: $dan"."<br />";

        $prosecna_uspesnost = $prosecna_uspesnost_zbir/count($niz);
        echo "Prosecna uspesnost je: $prosecna_uspesnost"."<br />";

        $min_uspesnost = min($niz);
        $razlika = $max_uspesnost - $min_uspesnost;
        echo "Razlika izmedju najbolje i najgore uspesnosti: $razlika";
    }
    evaluacija($uspesnost);
?>