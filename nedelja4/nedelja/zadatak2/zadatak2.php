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
        $name_and_surname = trim($_GET['prezime_i_ime']);

        $space_position = strpos($name_and_surname, ' ');
        $first_initial = substr($name_and_surname, 0, 1);
        $second_initial = substr($name_and_surname, $space_position + 1, 1);

        echo $first_initial.".".$second_initial.".";
    ?>
</body>
</html>