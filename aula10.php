<?php
$transport= array("Carro","Moto","Bicicleta","Navio","Onibus","Aviao");
foreach($transport as $one){
    echo "$one <br/>";
    // if($one == "Bicicleta")
    // break;

    
}

echo "<hr/>";

foreach($transport as $one){
    if($one == "Navio")
    echo " Navio esta na lista da variavel one<br/>";

    if($one == "Carro")
    echo "Carro esta na lista da variavel one <br/>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 php - loop foreach</title>
</head>
<body>
    
</body>
</html>