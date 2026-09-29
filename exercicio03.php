<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];

var_dump($numero1);
echo "<br>";

var_dump($numero2);
echo "<br><br>";

$soma = $numero1 + $numero2;

print "A soma é: " . $soma;

?>