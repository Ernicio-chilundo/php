<?php
class Carro
{
    var $tipo; // 1=Passeio / 2=Esporte / 3=Utilitario
    var $velMax;
    var $nome;
    var $liga;
    var $vel;

    function Carro($tp, $no){
        $this->tipo = $tp;
        $this->liga = false;
        $this->nome = $no;
        $this->vel = 0;
        if ($tp == 1) {
            $this->velMax = 160;
        } else if ($tp == 2) {
            $this->velMax == 300;
        } else {
            $this->velMax = 100;
        }
    }

    function ligar(){
        $this->liga = true;
    }

    function desligar(){
        $this->liga = false;
    }

    function velocidade($vl) {
        if ($vl > $this->velMax) {
            $this->vel = $this->velMax;
        } else {
            $this->vel = $vl;
        }
    }

    function id() {
        echo "<hr/>";
        echo "Nome do carro: " . $this->nome;
        echo "<br/>Tipo do carro: " . $this->tipo;
        echo "<br/>Velocidade Maxima: " . $this->velMax;

        if ($this->liga) {
            echo '<br/>Este carro esta LIGADO';
        } else {
            echo '<br/>Desligado!!!';
        }
    }
}

$carro1 = new Carro(2, "Rapid");
$carro2 = new Carro(3,"Carregador");
$carro1->id();
$carro2 -> id();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 20 php - classes parte 1</title>
</head>

<body>

</body>

</html>