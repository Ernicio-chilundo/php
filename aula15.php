<?php
    $dia = date('d');
    $mes = date('m');
    $ano = date('Y');
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

    $hora = date('H');
    $minuto = date('i');
    $segundos = date('s');

    echo $hora.":".$minuto.":".$segundos."<br/>";
    echo $dia." de ".$meses[$mes-1]." de ".$ano;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 pphp - Manipulacao de data e horas</title>
</head>
<body>
    
</body>
</html>