<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets\CSS\style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets\CSS\exercicio.css" media="screen">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">

        <div class="conteudo">

            <?php
                //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>

        </div>

    </main>
    <footer class="rodape">Josinei Dornelas &copy; <?= date('Y');?></footer>

</body>
</html>