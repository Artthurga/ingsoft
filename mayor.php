<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];
$num4 = $_GET['num4'];
$num5 = $_GET['num5'];
$num6 = $_GET['num6'];

while ($num1 && $num2 && $num3 && $num4 && $num5 && $num6 > 0) {
    
    $numeros = array($num1,$num2,$num3,$num4,$num5,$num6);

    array_unique($numeros);

Echo 'El mayor numero es: '. Max($numeros);
Echo 'El mayor numero es: '. Min($numeros);
echo </br>;

break;

};

?>
