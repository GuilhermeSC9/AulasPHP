<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Desafio - Formulário de Produto</div>

<div class="alert alert-success">
  <strong>Successo!</strong> Dados enviados com sucesso para o banco de dados.
</div>

<div class="alert alert-danger">
  <strong>Erro!</strong> Existe(m) campo(s) inválido(s) : <br>
  Nome do produto - não pode estar vazio <br>
  Estoque - não pode aceitar valor negativo<br>
  Estoque Mínimo - não pode aceitar valor negativo <br>
  Valor Unitário - não pode aceitar valor zero <br>
</div>

<form action="#" method="POST">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome produto</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <div class="form-group col-md-4">
            <label for="datacadastro">Data Cadastro</label>
            <input type="date" class="form-control" name="datacadastro" id="datacadastro">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="estoque">Estoque</label>
            <input type="text" class="form-control" name="estoque" id="estoque">
        </div>
        <div class="form-group col-md-6">
            <label for="estoquemin">Estoque Mínimo</label>
            <input type="text" class="form-control" name="estoquemin" id="estoquemin">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="categoria">Categoria produto</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value="Higiene">Higiene</option>
                <option value="Limpeza">Limpeza</option>
                <option value="Informática">Informática</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="valorunitario">Valor Unitário</label>
            <input type="text" class="form-control" name="valorunitario" id="valorunitario">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>
<br><br>

<?php

echo("<br> Nome do produto: {$_POST['nome']}");
echo("<br> Data de Cadastro do Produto: {$_POST['datacadastro']");
echo("<br> ")
