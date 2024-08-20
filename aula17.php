<?php
    $aula ="";

    if(isset($aula)){
        echo "Variavel aula definida";
    }else{
        echo "Variavel Nao definida";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 php - funcao isset</title>
</head>
<body>
    <form name="f_aula" method="post" action="aula17.php">
        <label>Nome:</label>
        <input type="text" name="f_nome"><br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>