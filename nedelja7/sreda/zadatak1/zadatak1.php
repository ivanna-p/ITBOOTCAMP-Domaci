<style>
    .crveni{
        color:red;
    }
    .zeleni{
        color:green;
    }
</style>
<?php
    $niz = ["Roma", "Milan", "Inter", "Juventus", "Atalanta", "Toti", "Fiorentina", "Papu", "Gomez"];

    $spanovi = [];
    foreach($niz as $element){
        if(strlen($element) < 5){
            array_push($spanovi, "<span class='crveni'>".$element."</span>");
        } elseif(strlen($element) > 5){
            array_push($spanovi, "<span class='zeleni'>".$element."</span>");
        } else {
            array_push($spanovi, "<span>".$element."</span>");
        }
    }

    echo join(" ", $spanovi);

    //Nisam znala da li treba, jer nije precizirano, pa sam pokrila i granicni slucaj, ako rec ima tacno 5 slova, pa su u spanu, ali bez klase.
?>