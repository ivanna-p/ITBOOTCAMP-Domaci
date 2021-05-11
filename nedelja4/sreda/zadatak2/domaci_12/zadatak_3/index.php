<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        $number_1 = mt_rand(1, 10);
        $number_2 = mt_rand(1, 10);
        $number_3 = mt_rand(1, 10);
        $exponent = 2;
    ?>
    <br/>
    <table>
        <tr>
            <td><?=$number_1?></td>
            <td><?=$number_1**$exponent?></td>
        </tr>
        <tr>
            <td><?=$number_2?></td>
            <td><?=$number_2**$exponent?></td>
        </tr>
        <tr>
            <td><?=$number_3?></td>
            <td><?=$number_3**$exponent?></td>
        </tr>
    </table>
</body>
</html>