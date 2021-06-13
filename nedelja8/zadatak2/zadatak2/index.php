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
        include "podaci.php";
        include "Proizvod.php";

        $website = new WebSite($podaci);

        $website->header();  
        $website->meni();

        $grupa = (isset($_GET['grupa']))? $_GET['grupa'] : "";
        
        $website->prikazi_sadrzaj($grupa);
        $website->footer();
    ?>
</body>
</html>