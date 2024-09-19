<?php
    //Final, a palavra reservada final diz que o metodo nao pode ser subscrito.

    abstract class CarroBase{
        public $cor;
        public $vel = 0;

        function CarroBase($cr){
        $this->cor = $cr;
        }

        function status(){
            echo '<hr/>';
            echo 'Carro: '.$this->cor;
            echo '<br/>Velocidade: '.$this->vel;
            echo '<hr/>';
        }

        function Cor(){
            echo '<br/>Minha cor: '.$this->cor;
            echo '<br/>Metodo original';
        }
    }

    class Carro extends CarroBase{
        function Cor(){
            echo '<br/>Cor: '.$this->cor;
        }
    }

    $car = new Carro();
?>