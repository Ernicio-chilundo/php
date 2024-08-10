<?php
function aula(){
    echo "<hr/>Ola mundo<br/><br/>";
    echo "Aula sobre funcoes<hr/>";
}

aula();

function mult ($n1,$n2){
    $res=$n1 * $n2;
    echo "O produto de $n1 e $n2 = $res<br/>";
}

mult(5,25);

function mult2 ($n1,$n2){
    $res = $n1 * $n2;
    return $res;
}

$mt = mult2(10,10);
echo "O resultado da multiplicao e : $mt <br/>";

$valores=array(1,2,3,4,7,46,32,8,11,22);
function media($val){
    $tam = count($val);
    $soma = 0;
    for ($i = 0; $i < $tam ; $i ++){
        $soma += $val[$i];
    }
    return $soma/$tam;
}

$med = media($valores);
echo "Media = $med";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 php - funcoes</title>
</head>
<body>
    
</body>
</html>