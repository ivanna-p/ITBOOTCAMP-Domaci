<?php
    include "Jelo.php";

    $jelo  = new Jelo("Palačinke", "Najbolje jelo ikad", $podaci);
    $jelo -> prikazi();
    echo "<br/>";
    $jelo -> promeniMeru("brasno", "400g");
    $jelo -> prikazi();
?>