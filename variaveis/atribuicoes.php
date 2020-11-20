<div class="titulo">Atribuições</div>

<?php

echo '<br>' . 'Operadores de Atribuição';
echo '<br>' . '=  padrão';
$numero = 10;
echo '<br>' . $numero;
echo '<br>' . '+=  atribuição somando';
$numero += 1; //$numero = $numero + 1;
echo '<br>' . $numero;
echo '<br>' . '-=  atribuição subtraindo';
$numero -= 1; //$numero = $numero - 1;
echo '<br>' . $numero;
echo '<br>' . '*=  atribuição multiplicando';
$numero *= 20; //$numero = $numero * 2;
echo '<br>' . $numero;
echo '<br>' . '/=  atribuição dividindo';
$numero /= 2; //$numero = $numero / 2;
echo '<br>' . $numero;
echo '<br>' . '%=  atribuição resto da divião';
$numero %= 3; //$numero = $numero % 2;
echo '<br>' . $numero;
echo '<br>' . '**=  atribuição potência';
$numero **= 2; //$numero = $numero ** 2;
echo '<br>' . $numero;
echo '<br>' . '++  incremento';
$numero++;
echo '<br>' . $numero;
++$numero;
echo '<br>' . $numero;
echo '<br>' . '-- decremento';
$numero--;
echo '<br>' . $numero;
--$numero;
echo '<br>' . $numero;

$a = 5;
$b = $a++;
echo '<br>' , 'O valor de A = ' , $a, ' O valor de B = ', $b;
$b = ++$a;
echo '<br>' , 'O valor de A = ' , $a, ' O valor de B = ', $b;

echo '<br>' . '.= atribuição concatenando';
$texto = 'Isso é um texto';
echo '<br>' . $texto;
$texto .= ' qualquer'; //$texto = $texto . 'qualquer';
echo '<br>' . $texto;

//$variavelInexistente = 'valor inexistente';
//echo '<br>' . $variavelInexistente;
$valor = $variavelInexistente ?? 'valor padrão';
echo '<br>' . $valor;

