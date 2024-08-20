<?php
 function aula($num){

    if($num!=0){
        echo "funcao aula com valor $num <br/>";
        aula($num-1);
    }
}
// aula(10); 


function fat($num){
    if($num < 0){
        return -1;
    }
    if($num <= 1){
        return 1;
    }
    return $num*fat($num-1);
}

echo "factorial de -50 igual a: ".fat(-50)
?>

<!DOCTYPE html/>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" edge="IE">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aula 14 php - funcoes recursivas</title>
    </head>

    <body>
        
    </body>
</html>