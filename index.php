<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\css\estilo.css">
    <title>Aula de PHP</title>   
</head>
<body>
    <header class="cabecalho">
        <h1>Técnico em DS - Aula PHP</h1>
        <h2>Índice de Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo laranja">
                    <h3>5. Módulo Array</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=array&file=basico">
                                Básico
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=array&file=mapa">
                                Array Mapa
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>4. Módulo Formulário</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=formularios">
                                Formulários
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=camposhidden">
                                Campos Hidden
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=campostext">
                                Campos Text/TextArea
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=camposradio">
                                Campos Radio
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=camposcheckbox">
                                Campos CheckBox
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=camposselect">
                                Campos Select
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=formularios&file=desafioformulario">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>3. Módulo Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                                Atribuições
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">
                                Interpolação
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                                Variável de Variável
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                                Valor vs Referência
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constantes">
                                Constantes
                            </a>
                        </li>
                     </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Módulo Tipos Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=inteiro">
                                Tipo inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=float">
                                Tipo float
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=string">
                                Tipo String
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=booleano">
                                Tipo Booleano
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=conversoes">
                                Conversões
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=aritmeticos">
                                Operadores Aritméticos
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tipos&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>1. Módulo Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                                Olá
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">
                                Integração com HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">
                                Integração com CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">
                                Comentários em PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">
                                Desafio
                            </a>
                        </li>
                    </ul>
                </div>              
            </nav>
        </div>
    </main>
    <footer class="rodape">
        &copy; Etec Cafelândia - <?= date('Y') ?>
    </footer>

</body>
</html>