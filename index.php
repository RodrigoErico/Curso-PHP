<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=olaPHP">Olá PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=comentario">Comentários PHP</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operacões Aritméticas</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencias">Desafio Precedências</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>
