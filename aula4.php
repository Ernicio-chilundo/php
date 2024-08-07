<?php
//Arrays >> e um conjunto de variaveis do mesmo tipo

$vet = array(7);
$vet2 = array("nome" => "Komso", "cidade" => "Maxixe", "curso" => "PHP");
$matriz = array(
    array("Carro1",65000),
    array("Carro2",35000),
    array("Carro3",50000)
);

$vet[0] = "Carro";
$vet[1] = "Aviao";
$vet[2] = "Navio";
$vet[3] = "Moto";
$vet[4] = "Onibus";
$vet[5] = 123456;
$vet[6] = $vet2["nome"];

echo "Carro A : " . $matriz[0][0] . " - Preco : " . $matriz[0][1]."<br/>";
echo "Carro B : " . $matriz[1][0] . " - Preco : " . $matriz[1][1]."<br/>";
echo "Carro C : " . $matriz[2][0] . " - Preco : " . $matriz[2][1]."<br/><hr/>";

$i = 6;
echo " O elemento do indice $i = " . $vet[$i] . "<br/><hr/>";

echo "Nome: " . $vet2["nome"] . " - Cidade: " . $vet2["cidade"] . " - Curso: " . $vet2["curso"];
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