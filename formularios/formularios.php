<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulários</div>

<?php

    $nomeErro = '';
    $nascimentoErro = '';
    $emailErro = '';
    $siteErro = '';
    $filhosErro = '';
    $salarioErro = '';
    
    //if(count($_POST) > 0){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    /*    
        if(empty($_POST['nome'])){
            $nomeErro = 'Nome é obrigatório';
        }
    */

        if(!filter_input(INPUT_POST, "nome")){
            $nomeErro = 'Nome é obrigatório';
        }

        if(filter_input(INPUT_POST, "nascimento")){
            $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
            if(!$data){
                $nascimentoErro = 'Data deve estar no padrão dd/mm/aaaa';
            }
        }

        if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)){
            $emailErro = 'Email inválido';
        }

        if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
            $siteErro = 'Site inválido';
        } 

        $filhosConfing = [
            "options" => ["min_range" => 0, "max_range" => 20]
        ];
        if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT,
        $filhosConfing) && $_POST['filhos'] > -1){
            $filhosErro = 'Quantidade de filhos inválida (0-20).';
        } 

        $salarioConfig = [
            "options" => ["decimal" => ',']
        ];
        if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
            $salarioErro = 'Salário inválido.';
        }

    }
    
?>


<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
            <small class="form-control-sm form-text text-danger"><?php echo $nomeErro; ?></small>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control" name="nascimento" id="nascimento">
            <small class="form-control-sm form-text text-danger"><?php echo $nascimentoErro; ?></small>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email">
            <small class="form-control-sm form-text text-danger"><?php echo $emailErro; ?></small>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" name="site" id="site">
            <small class="form-control-sm form-text text-danger"><?php echo $siteErro; ?></small>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Qtde de Filhos</label>
            <input type="text" class="form-control" name="filhos" id="filhos">
            <small class="form-control-sm form-text text-danger"><?php echo $filhosErro; ?></small>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control" name="salario" id="salario">
            <small class="form-control-sm form-text text-danger"><?php echo $salarioErro; ?></small>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>

<?php

    // print_r($_POST);

    // echo '<br>';

    // print_r($_GET);

    // echo '<br>';

    // print_r($_REQUEST);

    if(count($_POST) > 0){
        echo "<br>Nome : {$_POST['nome']}";
        echo "<br>Nascimento : {$_POST['nascimento']}";
        echo "<br>E-mail : {$_POST['email']}";
        echo "<br>Site : {$_POST['site']}";
        echo "<br>Filhos : {$_POST['filhos']}";
        echo "<br>Salário : {$_POST['salario']}";
        
        /*
        echo '<pre>';
        print_r($_SERVER);
        echo '</pre>';
        */
    }


?>