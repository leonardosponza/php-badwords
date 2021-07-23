<?php
    $testo = 'Trentatré trentini

    entrarono in Trento
    
    tutti e trentatré
    
    trotterellando
    
    trecentotrentatré trentini
    
    entrarono in Trento
    
    tutti e trentatré
    
    trotterellando
    
    tremilatrecentotrentatré trentini
    
    entrarono in Trento
    
    tutti e trentatré
    
    trotterellando';

    $testonew = $_GET['testo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badwords</title>
</head>
<body>
    <p>testo:<?php echo $testo ?> </p>
    <h1>testo: <?php echo $testonew?></h1>
</body>
</html>