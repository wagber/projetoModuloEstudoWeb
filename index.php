<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/CSS/estilo.css">
    <title>Estudo Web</title>
</head>
<body>
    <header class="cabecalho">
        <h1>PHP 7</h1>
        <h2>Módulos</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=teste&file=teste">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        WAGBER DEV ® <?= date('Y'); ?>
    </footer>
</body>
</html>
