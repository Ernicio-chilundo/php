<?php
session_start();
$_SESSION['vnome'] = "Ernicio";
$_SESSION['vtexto'] = 'texto para test';
$_SESSION['vlog'] = "n";

//unset($_SESSION['vnome']);

echo $_SESSION['vnome'];
echo '<br>' . $_SESSION['vtexto'];
// session_destroy();

if (isset($_SESSION['vcanal'])) {
    echo "<br/>" . $_SESSION['vcanal'];
} else {
    echo "<br/>" . "A variavel vcanal nao foi definida";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 19 PHP - sessoes</title>
</head>

<body>
    <br />
    <a href="pg1.php" target="_self">Segunda pagina</a>
</body>

</html>