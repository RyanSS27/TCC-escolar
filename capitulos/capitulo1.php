<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/mediaquerys/header-mediaquery.css">
    <link rel="stylesheet" href="capitulos.css">
    <link rel="stylesheet" href="capitulos-mediaquery.css">
    <link rel="shortcut icon" href="../icons/coffee-ico.ico" type="image/x-icon">
    <title>Organize o seu estudo</title>
</head>
<body>
    <?php
        session_start(); // Inicia a sessão para verificar se o usuário está logado
        include '../connection.php';

        if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) {
            // Usuário logado - inclui o header para usuários cadastrados
            include('../header-usuario.php');
        } else {
            // Usuário não logado - inclui o header para usuários não cadastrphp
            include('../header.php');
        }
    ?>
    <main>

        <section>
            <h1 onload="sequestraPag()" id="topocap">Organize o seu estudo</h1>
            <aside>Daniel Victor Cruz de Siqueira<span>Publicado: Dezembro 02, 2024</span> Atulizado Dezembro 02, 2024</aside>
            <hr>
        </section>

        <div class="pagina">
            <section class="introducao">
                <p>
                    A organização é o primeiro passo para transformar o desejo de estudar em um hábito produtivo e eficiente. Quando você se organiza, cria um ambiente onde o aprendizado flui de forma natural, com metas claras e um plano bem estruturado. Isso não só ajuda a evitar a sensação de sobrecarga, mas também garante que você mantenha o foco e avance de maneira constante. Neste capítulo, vamos explorar como a organização pode ser sua aliada, fornecendo ferramentas práticas para planejar seus estudos e alcançar seus objetivos com mais tranquilidade e confiança.
                </p>
            </section>
            <section class="metas">
                <h2>Aprenda a definir metas com o método <span class="mark">SMART</span></h2>
                <p>
                    O método SMART é uma ferramenta utilizada para definir metas de forma clara e eficaz, ajudando a garantir que sejam alcançáveis. A sigla SMART representa cinco critérios que uma meta deve atender: Specífica (clara e bem definida), Mensurável (quantificável para acompanhar o progresso), Atingível (realista e possível de ser alcançada), Relevante (importante e alinhada com objetivos maiores) e Temporal (com prazo definido).
                </p>
                <p>
                Esse método é amplamente utilizado em diversas áreas, como gestão de projetos, desenvolvimento pessoal e planejamento estratégico, pois ajuda a transformar ideias vagas em ações concretas. Para aplicá-lo, basta analisar cada critério ao formular a meta, por exemplo, ao invés de "quero economizar dinheiro", dizer "quero economizar R$ 500 em 3 meses, guardando R$ 167 por mês". Dessa forma, o método SMART proporciona mais clareza, motivação e organização para atingir objetivos.
                </p>
                <img src="imagens/smart.png" class="img-centralizada" alt="imagem ilustrativa ciclo smart">
            </section>
            <section class="ciclo-de-estudos">
                <h2>Organize o seu estudo</h2>
                <p>
                    O ciclo de estudos e o método Pomodoro são estratégias eficazes para aumentar a produtividade e a retenção de informações durante o aprendizado. O ciclo de estudos organiza o tempo de forma estruturada, alternando entre matérias ou tópicos específicos para evitar sobrecarga e melhorar o foco. Já o método Pomodoro consiste em dividir o estudo em blocos de tempo, geralmente de 25 minutos, seguidos por curtos intervalos de 5 minutos, com pausas maiores após quatro ciclos. 
                </p>
            </section> 
                <div class="imagem-conteudo img-organizacao"></div>
            <section class="ciclo-de-estudos">
                <p>
                    Essa combinação é ideal para manter a concentração, reduzir a procrastinação e facilitar o aprendizado em etapas. Para aplicá-los, defina previamente os conteúdos a serem estudados, organize-os em ciclos e utilize um cronômetro para os intervalos do Pomodoro. Essa abordagem não apenas melhora o rendimento, mas também promove o equilíbrio entre esforço e descanso, otimizando o processo de aprendizado.
                </p>
            </section>
        </div>
        <div class="caps-nav">
            <a href="#topocap"><span class="voltar" onclick="trocaPag(1)"><img src="imagens/arrow_left_capitulo.png" alt="seta voltar">Voltar</span></a>
            <select class="select-paginas" onchange="trocaPag(0)">
                
            </select>
            <a href="#topocap"><span class="proximo" onclick="trocaPag(2)">Próximo<img src="imagens/arrow_right_capitulo.png" alt="seta avançar"></span></a>
        </div>
    </main> 
    <script src="../scripts/capitulos.js"></script>
    <script src="../scripts/testaessamerda.js"></script>
</body>
</html>