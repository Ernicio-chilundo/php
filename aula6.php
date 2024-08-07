<?php
$opcao = 6; // 1: Carro - 2: Bicicleta - 3: Moto - 4: Navio - 5: Aviao

switch($opcao){
    case 1:
        echo "Carro";
        break;
    case 2:
        echo "Bicicleta";
        break;
    case 3:
        echo "Moto";
        break;
    case 4:
        echo "Navio";
        break;
    case 5:
        echo "Aviao";
        break;
    default;
    echo "Transport invalido";
    break;
}

echo "<hr/>";
switch($opcao){
    case($opcao <=3 and $opcao > 0):
        echo "Transporte terrestre";
        break;
    case 4:
        echo "Transport maritimo";
        break;
    case 5:
        echo "Transport aereo";
        break;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 condicional switch case</title>
</head>
<body>
    
</body>
</html>