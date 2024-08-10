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
echo"loop for";
for($i=0; $i < $tam ; $i++){
    
    if($lista[$i] == "chega"){
        
        break;
    }
    echo "$lista[$i]<br/>";
}

echo "<br/><hr/><br/>";
echo "loop foreach";

foreach($lista as $mesa){
    if($mesa == "chega"){

        break;
    }
    echo "$mesa<br/>";
}

echo "<br/><hr/><br/>";

$i = 0;
echo "loop do while";

do{
echo"$lista[$i]<br/>";
$i++;

if($lista[$i] == "chega")
break;
}while($i < $tam)

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