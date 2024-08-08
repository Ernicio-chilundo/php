<?php
// loop while

$i = 0;
$tam =6;
$vet = array($tam);

while($i < $tam){
    echo "O valor da variavel i: $i <br/>";
    $i ++;
}

echo "<br/><hr/><br/>";

$i = 0;
while($i < $tam){
    $vet[$i] = "Ernicio";
    $i ++;
}

$i = 0;
while($i < $tam){
    echo "$vet[$i] <br/>";
    $i++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7 php - looop while</title>
</head>
<body>
    
</body>
</html>