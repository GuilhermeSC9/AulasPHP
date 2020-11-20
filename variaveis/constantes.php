<div class="titulo">Constantes</div>

<?php

define('TAXA_DE_JUROS', 5.9);
echo '<br>' .  TAXA_DE_JUROS . '!';

const NOVA_TAXA = 2.5;
echo '<br>' .  NOVA_TAXA ;

const OUTRA_CONSTANTE = 2.8 + 2.5;
echo '<br>' .  OUTRA_CONSTANTE ;

echo '<br>' . PHP_VERSION;
echo '<br>' . PHP_INT_MAX;

echo '<br> Linha: ' . __LINE__;
echo '<br>' . __DIR__ ;