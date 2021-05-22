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
        
        while($a <= 99){
            $a++;
            $first_digit = floor($a/10);
            $second_digit = $a - $first_digit*10;
            
            if($first_digit % 3 == 0 or $second_digit % 4 == 0) continue;

            echo $a;            
            echo "<br />";
        }
    ?>
</body>
</html>