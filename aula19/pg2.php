<?php
session_start();
echo "<h2>PAGINA 3</h2>";


echo $_SESSION['vnome'];
echo '<br>' . $_SESSION['vtexto'];
echo "<br/>".$_SESSION['vcanal'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 PHP - sessoes</title>
</head>

<body>
    <br>
    <a href="aula19.php" target="_self">Voltar na aula 19</a>
    <br>
    <a href="pg1.php" target="_self">Segunada pagina</a>
</body>

</html>