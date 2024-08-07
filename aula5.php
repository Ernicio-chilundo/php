<?php
//IF - ELSE

$nota = 70;

if($nota >=70){
    echo "<font color=blue>Aprovado</font>";
}elseif($nota >= 50){
    echo "<font color=orange>Recuperacao</font>";
}else{
    echo "<font color=red>Reprovado</font>";
}

if(($nota >=40) & ($nota <=60)){
    echo "<hr/> Aluno selecionado!";
}else{
    echo "<hr/> Aluno fora da faixa!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 php - condicional if else</title>
</head>
<body>
    
</body>
</html>