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
        function provera_niza($niz){
            $dvocifreni_brojevi = 0;
            $trocifreni_brojevi = 0;
            for($i=0; $i<count($niz); $i++){
                $element = $niz[$i];
                if($element>99 and $element<1000){
                    $trocifreni_brojevi++;
                } elseif($element<100 and $element>9){
                    $dvocifreni_brojevi++;
                } else {
                    continue;
                }
            }
            if($dvocifreni_brojevi > $trocifreni_brojevi){
                echo "U nizu ima vise dvocifrenih brojeva nego trocifrenih.";
            } elseif ($dvocifreni_brojevi < $trocifreni_brojevi){
                echo "U nizu ima vise trocifrenih brojeva nego dvocifrenih.";
            } else {
                echo "U nizu je jednak broj trocifrenih i dvocifrenih brojeva.";
            }
        }

        $niz = [2, 23, 65, 888, 654, 45, 9999, 333, 444];
        provera_niza($niz);
    ?>
</body>
</html>