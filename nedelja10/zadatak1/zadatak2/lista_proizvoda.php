<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista proizvoda</title>
</head>
<body>
    <?php
        include "Baza.php";
        include "Korpa.php";

        $lista_proizvoda = $b -> dobavi_proizvode();

        echo "<div>";
        foreach($lista_proizvoda as $proizvod) {
            echo "<div>";
            foreach($proizvod as $stavka) {
                echo "<span> " . $stavka . "</span>";
            }
            echo "<form action = 'izmena.php'>";
            echo "<input
                type = 'hidden'
                name = 'id'
                value = '".$proizvod['id']."'
            >";
            echo "<input
                type = 'hidden'
                name = 'akcija'
                value = 'dodaj'
            >";
            echo "<input type = 'submit' value = 'Ubaci proizvod u korpu'>";
            echo "</form>";
            echo "</div>";
        }
        echo "</div>"
    ?>
</body>
</html>