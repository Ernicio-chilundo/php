<?php
interface CarroPadrao
{
    function liga();
    function desliga();
    function status();
    function acelera();
    function freia();
}

interface CarroGuerra
{
    function atiraCanhao();
    function atiraMetralhadora();
}

abstract class CarroBase implements CarroPadrao, CarroGuerra
{
    public $potencia;
    public $velMax;
    private $ligado = false;

    function liga(){
        $this->ligado = true;
    }

    function desliga(){
        $this->ligado = false;
    }


    function status(){
        echo '<hr/>';
        echo 'potencia: ' . $this->potencia;
        echo '<br/>velocidade maxima: ' . $this->velMax;
        echo '<br/>';
        if ($this->ligado) {
            echo 'este carro esta ligado';
        } else {
            echo ' este carro nao esta ligado';
        }
        echo '<hr/>';
    }
    function acelera() {}
    function freia() {}
    function atiraCanhao() {}
    function atiraMetralhadora() {}
}

class Carro extends CarroBase
{
    function Carro($pt, $vm){
        $this->potencia = $pt;
        $this->velMax = $vm;

        $this->status();
    }
}

$carro = new Carro(150, 280);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 22 - php interfaces </title>
</head>

<body>

</body>

</html>