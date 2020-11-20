<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA, '<br>';
vaR_dump($numeroA);

EcHo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b; //padrão camel case
echo $somaDosNumeros;

//$somaDosNumeros = null;

echo '<br>' . isset($somaDosNumeros);

unset($somaDosNumeros);

echo '<br>' . isset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' , $variavel;

$variavel = "Agora sou um texto";
echo '<br>' , $variavel;

// regras de nomenclatura
$var = 'válido';
$var2 = 'válido';
$VAR = 'válido';
$_var_4 = 'válido';
$vâr5 = 'válido'; //evitar
//$6var = 'inválido';
//$%var7 = 'inválido';
//$var8& = 'inválido';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
