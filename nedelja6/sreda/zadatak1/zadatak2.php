<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
            padding: 30px;
        }
        table{
            border-collapse: collapse;
        }
        .black{
            background:black;
        }
    </style>
</head>
<body>
    <?php
        $number = mt_rand(1, 64);

        echo "<table>";
        for($i=0; $i<8; $i++){
            echo "<tr>";
            for($j = 0; $j<8; $j++){
                if($number == $i*8 + $j){
                    echo "<td class='black'></td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>