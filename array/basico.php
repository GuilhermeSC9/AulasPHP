<div class="titulo">Array Básico</div>

<?php

$lista = array(1, 2, 3.4, "texto");

var_dump($lista);

echo '<br>';

echo '<pre>';
print_r($lista);
echo '</pre>';

$lista[0] = 1234;

echo '<pre>';
print_r($lista);
echo '</pre>';

echo "<br> {$lista[0]}";
echo "<br> {$lista[1]}";
echo "<br> {$lista[2]}";
echo "<br> {$lista[3]}";
$lista[4] = "Rafael";
$lista[10] = "Teste de posição do array em PHP";
echo "<br> {$lista[4]}<br>";

var_dump($lista[4]);

$lista[] = array("Dom","Seg","Ter","Qua","Qui","Sex","Sab");

echo '<pre>';
print_r($lista);
echo '</pre>';

echo '<br>' . $lista[11][0];

$pessoas[] = array("Rafael","rafael@gmail.com","91223123");
echo '<br>';
echo '<pre>';
print_r($pessoas);
echo '</pre>';