<div class="titulo">Variável de Variável</div>

<?php

$a = "ValorA";
$ValorA = "ValorAA";

echo "$a {$$a}";

echo '<br>';

$a = "Nossa";
$Nossa = 'Eu';
$Eu = 'consegui';
$consegui = 'entender';
$entender = 'esse trem!!!';

echo "$a {$$a} {$$$a} {$$$$a} {$$$$$a}";
