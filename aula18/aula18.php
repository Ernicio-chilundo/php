<?php
$texto = "perfect game";
$nome = "kosmo";
$canal = "fessor bruno";

echo "<a href = pg1.php?tx=" . urlencode($texto) . "&no=" . urlencode($nome) . "&cn=" . urlencode($canal) . " target = _self>Abrir pg1</a>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18 PHP - passagem de valores por uma url</title>
</head>

<body>

</body>

</html>