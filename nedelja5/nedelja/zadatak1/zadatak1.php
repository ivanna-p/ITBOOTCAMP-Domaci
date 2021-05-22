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
        $name = "Ivana";
        $surname = "Petrovic";

        function display_paragraph(){
            global $name, $surname;
            echo "<p><span>$name </span><span>$surname</span></p>";
        }

        $count = strlen($name) + strlen($surname);
        for($i = 0; $i < $count; $i++){
            display_paragraph();
        }
    ?>
</body>
</html>