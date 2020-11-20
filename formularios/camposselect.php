<div class="titulo">Campos Select</div>

<form action="exercicio.php?dir=formularios&file=select" method="post">
    <b>Qual é o seu processador?</b><br>
    <select name="processador">
        <option value="Pentium">Pentium</option>
        <option value="AMD">AMD</option>
        <option value="Celeron">Celeron</option>
    </select>
    <br><br>
    <b>Livros que deseja comprar</b><br>
    Obs.: "CRTL" para selecionar mais de um.
    <select name="livros[]" multiple>
        <option value="Bíblia do PHP 7">Bíblia do PHP 7</option>
        <option value="PHP Profissional">PHP Profissional</option>
        <option value="Inciando em PHP">Inciando em PHP</option>
        <option value="Novidades do PHP 8">Novidades do PHP 8</option>
        <option value="Bíblia do MySQL">Bíblia do PHP 7Bíblia do MySQL</option>
    </select><br><br>
    <input type="submit" value="Enviar">
</form>