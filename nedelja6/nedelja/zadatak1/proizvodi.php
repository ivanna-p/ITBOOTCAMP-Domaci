<?php
    require_once ("proizvod.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proizvodi</title>
</head>
<body>
    <?php
        proizvod(150, mt_rand(10, 30), "redmi.jpg", "Xiaomi RedMi Note 9s");
        proizvod(70, mt_rand(10, 30), "mi_band.jpg", "Mi Band 6");
        proizvod(40, 0, "mi_bulb.jpg", "Xiaomi Smart Led Bulb");
    ?>
</body>
</html>