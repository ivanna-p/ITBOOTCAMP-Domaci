<?php
    include "Korpa.php";
    include "Baza.php";

    if(isset($_GET['akcija']) && ($_GET['akcija'] == 'dodaj')) {
        $id = $_GET['id'];
        $proizvod = $b -> dobavi_proizvod($id);
        $korpa -> dodaj_proizvod($id, $proizvod['naziv'], $proizvod['cena'], 1);
        print_r($korpa);
    }
?>
