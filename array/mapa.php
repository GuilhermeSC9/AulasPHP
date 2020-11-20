<div class="titulo">Array Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 68.5
);

print_r($dados);

echo "<br>Idade = " . $dados['idade'];
echo "<br>Cor   = " . $dados['cor'];
echo "<br>Peso  = " . $dados['peso'];

$lista = array(
    "a",
    "cinco" => "b",
    "c"
);

$lista[] = "d";
$lista['e'] = "e";
$lista[] = 10;
$lista[] = array(1,2,3,4, "cinco" => 5);

echo '<br>';
echo '<pre>';
print_r($lista);
echo '</pre>';

echo '<br>' . $lista[4]['cinco'];

$tabela = array(
    array("nome" => "Rafael", "email" => "rafael@gamil.com"),
    array("nome" => "Joao", "email" => "joao@gamil.com"),
    array("nome" => "Maria", "email" => "maria@gamil.com"),
);

echo '<br>';
echo '<pre>';
print_r($tabela);
echo '</pre>';

for($cont = 0; $cont < count($tabela); $cont++){
    echo "<br> Nome : {$tabela[$cont]['nome']}";
    echo "<br> Email : {$tabela[$cont]['email']}";
    echo '<br>-------------------------------------------';
}