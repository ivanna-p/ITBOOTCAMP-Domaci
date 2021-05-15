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
        $surname = trim($_GET['prezime']);
        $name = trim($_GET['ime']);

        $surname_initial = substr($surname, 0, 1);
        $name_initial = substr($name, 0, 1);
        echo $surname_initial.".".$name_initial.".";
    ?>
</body>
</html>