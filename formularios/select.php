<?php

echo "Seu processador é : {$_POST['processador']} <br>";

if(isset($_POST['livros'])){

    //LOOP para os livros
    foreach($_POST['livros'] as $livro){
        echo " - $livro <br>";
    }

} else{
    echo "Você não escolheu nenhum livro.";
}