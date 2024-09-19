<?php


    class carro
    {

        public $cor;
        public static $vel;

        function carro($cr)
        {
            $this->cor = $cr;
            self::$vel = 0;
        }

        function mundaVel($vl)
        {
            self::$vel = $vl;
        }

        function status()
        {
            echo "<hr/>";
            echo "cor: " . $this->cor;
            echo "<Br/> velocidade: " . self::$vel;
            echo "<hr/>";
        }
    }

    $car1 = new carro("VERMELHO");
    $car2 = new carro("VERDE");
    $car3 = new carro("AZUL");
    $car1->status();
    $car2->status();
    $car3->status();

    echo '<h2>velocidade alterada</h2>';
    $car1->mundaVel(100);
    $car1->status();
    $car2->status();
    $car3->status();

    echo '<h3>velocidade alterada</h3>';
    $car2->mundaVel(150);
    $car1->status();
    $car2->status();
    $car3->status();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>