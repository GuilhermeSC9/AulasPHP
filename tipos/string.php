<div class="titulo">Tipo String</div>
<style>
    .paragrafo{
        color: blue;
    }
</style>

<?php

echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

//concatenação
echo("Nós também" . " somos" . '<br>');
$nome = "Rafael " . 'Cruz';
echo("Eu sou " . $nome );
echo '<br>' , 'Também funciona ' , 'na concatenação ' , "<br>";
echo 'Número é ' . 123;

//quando utilizar aspas simples ou duplas
echo '<br>';
echo "Texto dentro de 'Texto'" . ' outro texto "enfatizado"';
echo '<br>Outra forma de \'enfatizar o texto\' d\'água';
echo "<br>Também funciona com as \"aspas duplas\"";
echo "<br><p class=\"paragrafo\">Exemplo do uso do \\escape\\ de aspas</p>";

//print - outro comando para escrever conteúdos na página
print("<br>Outro comando para escrever conteúdos na página");
print '<br>Usando o print como echo ' . $nome;

// Alguns funções para string
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . substr('Aprendo STRING no PHP', 8, 6);