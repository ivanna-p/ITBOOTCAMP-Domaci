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
        $prva_promenjiva = $_GET['promenjiva_1'];
        $druga_promenjiva = $_GET['promenjiva_2'];

        function duzina_imena(){
            global $prva_promenjiva, $druga_promenjiva;
            if(strlen($prva_promenjiva) >= strlen($druga_promenjiva)){
                echo "$prva_promenjiva";
            } else {
                echo "$druga_promenjiva";
            }
        }

        duzina_imena();
    ?>
</body>
</html>