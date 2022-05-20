<?php
 $stringa = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis dolorem mollitia incidunt facere suscipit reiciendis."
    if(isset($_GET['censura'])){
     $stampa = str_replace( $_GET['censura'], '???', $stringa);      
    } else {
        $stampa = $stringa;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p> <?php echo $stampa ?> </p>
    <p> <?php echo strlen($stampa)?> </p>
</body>
</html>