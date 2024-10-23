<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="capitulos.css">
    <link rel="stylesheet" href="capitulos-mediaquery.css">
    <title>Importância do Sono e do Ócio</title>
</head>
<body>
    <header>
        <img src="../imagens/logo-estudo-expresso-fundo-escuro.png" alt="Estudo & Expresso" class="logo">
        <div>
            <nav>
                <a href="../index.html">INICIO</a>
                
                <a href="../quem-somos.html">SOBRE NÓS</a>
                <a href="../meu-aprendizado.html">MEU APRENDIZADO</a>
                <div>
                    <a href="../formularios/cadastro.html"class="cadastro">CADASTRO</a>
                    <a href="../formularios/login.html">LOGIN</a>
                </div>
            </nav>
        </div>
    </header>
    <main>

        <section>
            <h1 onload="sequestraPag()">Importância do Sono e do Ócio</h1>
            <aside>Ryan de Souza Silva <span>Publicado: Outubro 12, 2024</span> Atulizado Outubro 12, 2023</aside>
            <hr>
        </section>

        <div class="pagina">
            <section class="introducao">
                <p>
                    <span class="mark">E aí, programador!</span> Com mais de 700 opções de linguagens de programação para
                    escolher, pode ser um desafio decidir qual delas aprender primeiro. Em última instância, esta escolha
                    depende muito do que você está tentando construir através da programação.
                </p>
                
            </section>
            <div class="imagem-conteudo"></div>
            <section class="introducao">
                <p>
                    Descubra 3 línguagens poderosas, escolhidas por nós, que julgamos estarem moldando o futuro da tecnologia
                    e dominando o cenário da programação no ano de 2024. Quais suas aplicações práticas e as considerações
                    essenciais para escolher a mais adequada para o seu próximo projeto ou objetivo de estudo será o que
                    vamos lhe apresentar.
                </p>
                <h2>O que são linguagens de programação?</h2>
                <p>
                    As linguagens de programação são fundamentais para a automatização de tarefas, desenvolvimento de
                    software, inovação tecnológica, interconectividade, educação e pesquisa, além de oferecerem amplas
                    oportunidades de carreira e contribuírem significativamente para a economia global. Elas permitem a
                    criação de programas que resolvem problemas específicos, impulsionam avanços em áreas como inteligência
                    artificial e big data, facilitam a comunicação entre diferentes sistemas e dispositivos, e são
                    essenciais no ensino de conceitos de lógica e ciências da computação. Assim, o domínio dessas linguagens
                    é uma habilidade crucial no mundo moderno.
                </p>
                <div class="texto-imagem">
                    <p class="texto-metade">
                        Entrar na área de programação oferece diversos benefícios, como alta demanda e
                        excelentes salários, garantindo empregabilidade e estabilidade. A flexibilidade de trabalho, muitas
                        vezes permitindo trabalho remoto, proporciona um bom equilíbrio entre vida pessoal e profissional. A
                        área oferece inúmeras oportunidades de crescimento e desenvolvimento de carreira, com a constante
                        necessidade de aprender novas tecnologias, mantendo o trabalho estimulante.
                    </p>
                    <img src="../imagens/meu-aprendizado/organizacao.jpg" class="img-metade img-direita">
                </div>
            </section>
            <section class="linguagens phyton" id="phyton">
                <h2><span class="mark">Top 3</span> linguagens para iniciar na área ou aplicar nos seus projetos em 2024</h2>
                <h3>Phyton</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iste facere quasi nam
                    excepturiaspernatur natus officia illo accusantium facilis libero optio totam maiores ipsa, dicta,
                    beatae cumque. Debitis autem.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, tenetur
                    dicta hic pariatur totam doloribus magnam labore ducimus! Voluptatibus eaque, fugiat id quaerat
                    voluptate nihil nulla cumque oditdolorem fuga?
                </p>
            </section>
            <section class="linguagens" id="js">
                <h3>JavaScript</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iste facere quasi nam excepturi
                    aspernaturnatus officia illo accusantium facilis libero optio totam maiores ipsa, dicta, beatae cumque.
                    Debitis,autem.
                </p>
            </section>
            <section class="linguagens" id="php">
                <h3>PHP</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iste facere quasi nam excepturi
                    aspernaturnatus officia illo accusantium facilis libero optio totam maiores ipsa, dicta, beatae cumque.
                    Debitis,autem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptate sint tempore,
                    maxime ut beatae quam deserunt alias dolores, labore nulla in eveniet quas sit, blanditiis nobis
                    repellat saepeullam.
                </p>
            </section>
        </div>

        <div class="pagina">
            <h2>pagina2</h2>
        </div>
        <div class="pagina">
            <h2>pagina3</h2>
        </div>
        <div class="pagina">
            <h2>pagina4</h2>
        </div>
        

        <div class="caps-nav">
            <span class="voltar" onclick="trocaPag(1)"><img src="imagens/arrow_left_capitulo.png" alt="seta voltar">Voltar</span>
            <select class="select-paginas" onchange="trocaPag(0)">
                
            </select>
            <span class="proximo" onclick="trocaPag(2)">Próximo<img src="imagens/arrow_right_capitulo.png" alt="seta avançar"></span>
        </div>
    </main> 
    <script src="../script-testes.js"></script>
</body>
</html>