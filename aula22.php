<?php
abstract class CarroBase
{

    public $potencia;
    public $velMax;
    public $portas;
    public $ligado = false;

    function ligar()
    {
        $this->ligado = true;
    }

    function desligar()
    {
        $this->ligado = false;
    }

    function status()
    {
        echo "<hr/>";
        echo "<br/>potencia: " . $this->potencia;
        echo "<br/>velocidade maxima: " . $this->velMax;
        echo "<br/>portas: " . $this->portas;
        echo "<br/>";
        if ($this->ligado) {
            echo "carro ligado";
        } else {
            "carro desligado";
        }
        echo "<hr/>";
    }
}

class Carro extends CarroBase
{
    function Carro($pt, $vm, $po)
    {
        $this->potencia = $pt;
        $this->velMax = $vm;
        $this->portas = $po;
        $this->status();
    }
}
$carro=new Carro(150, 280, 4);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22 php - classes parte 3</title>

</head>

<body>

</body>

</html>