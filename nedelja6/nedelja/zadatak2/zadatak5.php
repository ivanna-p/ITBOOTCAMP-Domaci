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
        function nizovi($boje, $reci){
            if(count($boje) < count($reci)){
                die("Nizovi nisu jednake duzine");
            }
            foreach($reci as $index => $element){
                echo "<span style='color:".$boje[$index]."'>".$element." </span>";
            }
        }

        $boje = ['green', 'blue', 'yellow'];
        $reci = ['sto', 'stolica', 'mobilni'];
        nizovi($boje, $reci);
    ?>
</body>
</html>