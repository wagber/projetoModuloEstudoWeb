<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/CSS/estilo.css">
    <link rel="stylesheet" href="recursos/CSS/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>PHP 7</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                //Outras formas para o mesmo resultado
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                //{$_GET['dir']}
                //{$_GET['file']}
                //include("teste/teste.php");
                //include("{$_GET['dir']}/{$_GET['file']}.php");
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        WAGBER DEV ® <?= date('Y'); ?>
    </footer>
</body>
</html>
