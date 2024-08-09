<?php
$i = 0;
$tam =5;
$vet = array($tam);

for($i=0; $i < $tam ; $i++){
    echo "Valor de i : $i <br/>";
}


echo "<br/>";
for($i=0; $i < 240; $i++){
    echo "-";
}
echo "<br/><br/>";

for($i=0; $i < $tam; $i++){
 $vet[$i]=$i*2;
} 

for($i=0; $i<$tam; $i++){
    echo "Valor da posicao $i: $vet[$i] <br/>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula php - loop for</title>
</head>
<body>
    
</body>
</html>