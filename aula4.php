<?php
//Arrays >> e um conjunto de variaveis do mesmo tipo

$vet = array(6);
$vet2 = array("nome"=>"Komso", "cidade"=>"Maxixe","curso"=>"PHP");

$vet[0]= "Carro";
$vet[1] = "Aviao";
$vet[2] = "Navio";
$vet[3] = "Moto";
$vet[4] = "Onibus";
$vet[4] = 123456;

$i =1;
echo" O elemento do indice $i = " . $vet[ 1]."<br/><hr/>";

echo "Nome: ".$vet2["nome"]. " - Cidade: ".$vet2["cidade"] . " - Curso: ". $vet2["curso"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 php - Vetores/Arrays</title>
</head>
<body>
    
</body>
</html>