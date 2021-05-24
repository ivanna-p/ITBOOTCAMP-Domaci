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
            padding: 20px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        echo "<table>";
        for($i=2; $i<=6; $i=$i+2){
            echo "<tr>";
            for($j = 3; $j<=12; $j=$j+3){
                echo "<td>$i-$j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>