<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 2</title>
</head>
<body>
    <?php
        $a = mt_rand(0, 10);
        $b = mt_rand(0, 10);
        $c = mt_rand(0, 10);
        echo "$a, $b, $c";
        echo "<br />";

        if ($a > $b && $b > $c) {
            echo "$a, $b, $c";
        } else if ($a >= $c && $c >= $b) {
            echo "$a, $c, $b";
        } else if ($b >= $a && $a >= $c) {
            echo "$b, $a, $c";
        } else if ($b >= $c && $c >= $a) {
            echo "$b, $c, $a";
        } else if ($c >= $b && $b >= $a) {
            echo "$c, $b, $a";
        } else {
            echo "$c, $a, $b";
        }
    ?>
</body>
</html>