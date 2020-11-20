<?php

//verificar se usuário escolheu algum número
if(isset($_POST['numeros'])){

    echo 'Os números de sua preferência são: <br>';

    //faz loop pelo array dos números
    foreach($_POST['numeros']  as $numero){

        echo " - " . $numero . "<br>";

    }
} else {
    echo "Você não escolheu números preferidos!<br>";
}

if(isset($_POST['noticias'])){
    echo "Você deseja receber notícias..";
} else{
    echo "Você não deseja receber notícias...";
}