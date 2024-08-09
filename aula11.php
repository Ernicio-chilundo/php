<?php
$lista = array("arroz","oleo","carne","chega","pao","milho");
$tam = count($lista);

$i = 0;
echo "loop while<br/>";
while ($i < $tam){
    echo "$lista[$i]<br/>";
    $i++;

    if($lista[$i] == "chega")
    break;
}

echo "<br/><hr/><br/>";

for($i=0; $i < $tam ; $i++){
    echo "$lista[$i]<br/>";

    if($lista[$i] == "chega")
    break;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 php - break</title>
</head>
<body>
    
</body>
</html>