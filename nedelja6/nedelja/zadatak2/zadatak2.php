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
        function palindrom($niz){
            foreach($niz as $element){
                if($element == strrev($element)){
                echo $element."<br />";
                }
            }
        }

        $niz = ["potop", "buducnost", "lul", "ratar", "html", "php", "madam"];
        palindrom($niz);
    ?>
</body>
</html>