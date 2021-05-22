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
        $a = 30;
        $product = 30;

        while ($a >= 1) {
            $a = $a - 1;
            $product = $product * $a;

            if($product > 100000){
                break;
            }
        }

        echo "<p style='color:red'>$product</p>";
        echo "<p style='color:green'>$a</p>";
    ?>
</body>
</html>