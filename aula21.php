<?php
class aula
{
    // protected-private
    protected $var1 = "Bom dia!";
    protected $var2 = "erniciojermiaschilundo.com";
    protected $var3 = "www.webveste.com";

    function escreve()
    {
        echo "<br/>" . $this->var1;
        echo "<br/>" . $this->var2;
        echo "<br/>" . $this->var3;
    }
}
//heraca
class canal extends aula
{
    var $v1 = "curso php";
    var $v2 = "Joao pereira";

    function passar()
    {
        echo "<br/> Metodo da class canal";
        echo "<br/>" . $this->v1;
        echo "<br/>" . $this->v2;
        echo "<br/>" . $this->var1;
        echo "<br/>" . $this->var2;
        echo "<br/>" . $this->var3;

    }
}

$aulaOBJ = new aula();
$canalOBJ = new canal();

$aulaOBJ->escreve();
echo "<hr/>";

// $canalOBJ->escreve();
$canalOBJ->passar();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 php - classes</title>
</head>

<body>

</body>

</html>