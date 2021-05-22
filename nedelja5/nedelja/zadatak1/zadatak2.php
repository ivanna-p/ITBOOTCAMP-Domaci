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
        $n = mt_rand(1, 10);
        $x = mt_rand(1, 10);
        echo "n = $n, x = $x";

        function show_spans(){
            global $n;
            for($i=1; $i<=$n; $i++){
                echo "<span>Ovo je span $i</span>";
            }
        }

        for($i=0; $i<$x; $i++){
            echo "<div>";
            show_spans();
            echo "</div>";
        }
    ?>
</body>
</html>