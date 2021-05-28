<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function pretvaranje_niza_u_meni($niz){
            echo "<ul>";
            foreach($niz as $element){
                echo "<li>".$element."</li>";
            }
            echo "</ul>";
        }

        $niz = ["Macka", "Pas", "Gavran", "Petao", "Hrcak"];
        pretvaranje_niza_u_meni($niz);
    ?>

</body>
</html>