<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadatak 1</title>
</head>
<body>
    <p>1. zadatak, nacin a)</p>
    <?php
        $a = mt_rand(0, 50);
        $b = mt_rand(0, 50);

        if ($a > $b) {
            echo "<span style='color:green'>$a</span><br />".
                 "<span style='color:red'>$b</span><br />";
        } else {
            echo "<span style='color:red'>$a</span><br />".
                 "<span style='color:green'>$b</span><br />";
        }
    ?>


    <p>1. zadatak, nacin b)</p>
    <!-- Znam da bi style bi trebalo da ide u header,
    ali sam stavila ovde da bi bilo jasnije
    da je vezano za drugi nacin -->
    <style>
        .red {
            color: red;
        }
        .green {
            color: green;
        }
    </style>
    <?php
        $a = mt_rand(0, 50);
        $b = mt_rand(0, 50);

        if ($a > $b) {
            echo "<span class='green'>$a</span><br />".
                 "<span class='red'>$b</span><br />";
        } else {
            echo "<span class='green'>$b</span><br />".
                 "<span class='red'>$a</span><br />";
        }
    ?>

</body>
</html>