<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $broj_1 = $_GET['broj_1'];
        $broj_2 = $_GET['broj_2'];
        $broj_3 = $_GET['broj_3'];
        $broj_4 = $_GET['broj_4'];

        function brojevi() {
            global $broj_1, $broj_2, $broj_3, $broj_4;
            $zbir_deljivih_sa_4 = 0;
            $zbir_deljivih_sa_3 = 0;
            
            if($broj_2 > $broj_1 and $broj_4 > $broj_3) {
                for($i = $broj_1; $i <= $broj_2; $i++) {
                    if($i % 4 == 0) {
                    $zbir_deljivih_sa_4 += $i;
                    }
                }

                for($i = $broj_3; $i <= $broj_4; $i++) {
                    if($i % 3 == 0){
                        $zbir_deljivih_sa_3 += $i;
                    }
                }

                if($zbir_deljivih_sa_4 > $zbir_deljivih_sa_3) {
                    return "<p> Veci je zbir brojeva deljivih sa cetiri ($zbir_deljivih_sa_4) u odnosu na zbir brojeva deljivih sa 3 ($zbir_deljivih_sa_3).</p>";
                } else {
                    return "<p> Veci je zbir brojeva deljivih sa 3 ($zbir_deljivih_sa_3) u odnosu na zbir brojeva deljivih sa 4 ($zbir_deljivih_sa_4). </p>";
                }
            } else {
                die("Postoji greska. Prvi broj treba da bude manji od drugog i treci broj treba da bude manji od cetvrtog.");
            }
        }
        echo brojevi();
    ?>
</body>
</html>