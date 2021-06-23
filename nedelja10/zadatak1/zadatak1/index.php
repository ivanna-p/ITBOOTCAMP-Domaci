<?php
    include "Baza.php";

    // Pronaci id destinacije po zelji pomocu prve metode.

    $id_destinacije = $baza -> dobavi_id_destinacije('Spanija','Barselona');
    echo "<br>";

    // Pronaci sva putovanja sa tom destinacijom pomocu druge metode.

    $putovanja = $baza -> dobavi_putovanja($id_destinacije);
    print_r ($putovanja);
    echo "<br>";

    // A zatim uzeti id prvog putovanja, i u spisku putnika trecom metodom obrisati sve aranzmane za to putovanje.

    $id_prvog_putovanja = $putovanja[0]['id'];
    echo "Brisem aranzmane za: ".$id_prvog_putovanja."<br />";
    
    $baza -> obrisi_putovanje($id_prvog_putovanja);


?>
