<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .oznacen{
            background: yellow;
            width: 150px
        }
    </style>
</head>
<body>
        <?php
        function pretvaranje_niza_u_meni($niz, $oznacen){
            echo "<ul>";
            foreach($niz as $index => $element){
                if($oznacen == $index){
                    echo "<li class='oznacen'>".$element."</li>";
                } else {
                    echo "<li>".$element."</li>";
                }
            }
            echo "</ul>";
        }
        
        $niz = ["Macka", "Pas", "Gavran", "Petao", "Hrcak"];
        $oznacen = mt_rand(0, 4);
        pretvaranje_niza_u_meni($niz, $oznacen);
    ?>
</body>
</html>