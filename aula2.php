<?php 
// variavel  e uma posicao que agente reserva na memoria ram do computadir
$vnome = "Kosmo";
$vnum = 10;
$vnum2 = 20.2;
$soma = 0;

// constantes sao definidas inicialmente e nao pdem ser alteradas os seus valores

define("cnome","Kosmo");
define("ver",PHP_VERSION);
define("dir",__DIR__);
echo "nome: $vnome <br/>";
$vnome = "campos";
echo "Nome: $vnome <br>";
$vnome ="Kosmo";
echo "Nome:".$vnome."<br/>";
$vsoma = 10 + 20;
echo "soma $vsoma <br/>";

echo "<hr/>";

echo "conctatente cnome:".cnome."<br/>";
echo "nome da constante".__FILE__."<br/>";
echo "versao do php:".ver."<br/>";
echo "pasta".dir."<br/>";
echo "Versao SO".PHP_OS."<BR/>";

//True e False sao constantes definidas no sistema
echo "Numero da linha".__LINE__."<br/>";

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2</title>
</head>
<body>
    
</body>
</html>
