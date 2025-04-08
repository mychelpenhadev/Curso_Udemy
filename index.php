<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">

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
                    <h3>BÁSICO</h3>
                     <ul>
                        <li>
                            <a
                             href="exercicio.php?dir=basico&file=ola">
                            Olá PHP
                            </a>
                        </li>
                         <li>
                             <a
                                     href="exercicio.php?dir=basico&file=html">
                                 Integração HTML
                             </a>
                         </li>
                         <li>
                             <a
                                     href="exercicio.php?dir=basico&file=css">
                                 Integração CSS
                             </a>
                         </li>
                         <li>
                             <a
                                     href="exercicio.php?dir=basico&file=comentarios">
                                 Comentarios PHP
                             </a>
                         </li> <li>
                             <a
                                     href="exercicio.php?dir=basico&file=desafio">
                                 Desafio PHP
                             </a>
                         </li>
                     </ul>
                 </div>
            <div class="modulo vermelho">
                <h3>TIPOS</h3>
                <ul>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=int">
                            Tipo Inteiro
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=float">
                            Tipo Float
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=aritmeticas">
                            Op. Aritméticas
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio Precedência
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=string">
                            Tipo string
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=desafio_string">
                            Desafio string
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=booleano">
                            Tipo Booleano
                        </a>
                    </li>
                    <li>
                        <a
                                href="exercicio.php?dir=tipos&file=conversoes">
                            Conversões
                        </a>
                    </li>
                </ul>
            </div>
                 <div class="modulo azul">
                     <h3>TIPOS</h3>
                     <ul>
                         <li>
                             <a
                                     href="exercicio.php?dir=variaveis&file=basico">
                                 Variáveis
                             </a>
                         </li>
                         <li>
                             <a
                                     href="exercicio.php?dir=variaveis&file=desafio_equacao">
                                 Desafio Equação
                             </a>
                         </li>
                     </ul>
                 </div>
             </nav>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?>
    </footer>
</body>
</html>