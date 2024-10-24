        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles/style.css">
            <link rel="stylesheet" href="styles/meu-aprendizado.css">
            <link rel="stylesheet" href="styles/mediaquerys/meu-aprendizado-mediaquery.css">
            <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
            <title>Meu aprendizado</title>
        </head>
        <body>
            <?php
                include('header.php');
            ?>



            <main>
                <div class="bloco-topo"></div>
                <div class="container">
                    <div class="topo">
                        <span>Rumo a aprendizagem</span>
                        <h2>Minha jornada</h2>
                        <hr>
                    </div>
                    <div class="borda cap1" id="cap1">
                        <div class="capitulos">
                            <div class="superior-cap"  onclick="abre_fecha(0, 1)">
                                <h3>Organize o seu estudo</h3>
                                <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow1">
                            </div>
                            <div class="inferior-cap">
                                <img src="imagens/meu-aprendizado/organizacao.jpg" alt="imagem ilustrativa sobre organização" class="imagens-ilustrativas">
                                <p>A chave para um estudo eficaz é a organização. Aprenda recursos que ajudam você a estruturar seu plano de estudos, distribuir o conteúdo de maneira equilibrada e definir metas realistas. Crie um cronograma personalizado, gerenciar tarefas e acompanhar seu progresso, garantindo que nada fique de fora.</p>
                                <div class="container-start">
                                    <a href="capitulos/capitulo1.php">
                                        <div class="start"><img src="imagens/meu-aprendizado/play-arrow.png" alt="comece"> Start</div>
                                    </a>
                                </div>
                                <div class="seu-progresso">
                                    <h4>Seu progresso</h4>
                                    <p class="porcentagem">75%</p>
                                    <div class="barra-progresso">
                                        <div class="progresso"></div>
                                    </div>
                                </div>
                            </div>
                            <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow2" onclick="abre_fecha(0, 1)">
                        </div>
                    </div>
                    <div class="borda container-capitulos-direita cap2" id="cap2">
                        <div class="capitulos">
                            <div class="superior-cap" onclick="abre_fecha(1, 1)">
                                <h3>Lide com a falta de foco, desânimo e motivação</h3>
                                <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow1">
                            </div>
                            <div class="inferior-cap">
                                <img src="imagens/meu-aprendizado/desanimo.jpg" alt="imagem ilustrativa sobre desânimo" class="imagens-ilustrativas">
                                <p>Para esse que um dos principais obstáculos, disponibilizamos uma série de dicas e estratégias práticas para manter a motivação em alta, combater o desânimo e melhorar sua concentração. Aprenda a identificar os fatores que influenciam seu desempenho e descubra como transformá-los a seu favor.</p>
                                <div class="container-start">
                                    <a href="capitulos/capitulo2.php">
                                        <div class="start"><img src="imagens/meu-aprendizado/play-arrow.png" alt="comece"> Start</div>
                                    </a>
                                </div>
                                <div class="seu-progresso">
                                    <h4>Seu progresso</h4>
                                    <p class="porcentagem">75%</p>
                                    <div class="barra-progresso">
                                        <div class="progresso"></div>
                                    </div>
                                </div>
                            </div>
                            <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow2" onclick="abre_fecha(1, 1)">
                        </div>
                    </div>
                    <div class="borda cap3" id="cap3">
                        <div class="capitulos">
                            <div class="superior-cap" onclick="abre_fecha(2, 1)">
                                <h3>Importância do Sono e do Ócio</h3>
                                <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow1">
                            </div>
                            <div class="inferior-cap">
                                <img src="imagens/meu-aprendizado/sono.jpg" alt="imagem ilustrativa sobre sono" class="imagens-ilustrativas">
                                <p>O sono de qualidade e momentos de descanso são fundamentais para o sucesso nos estudos. Descubra como o sono e do ócio contribuem para a assimilação do conteúdo e com a sua saúde mental na rotina de aprendizado. Compreenda como um bom descanso pode potencializar sua capacidade de retenção e clareza mental.</p>
                                <div class="container-start">
                                    <a href="capitulos/capitulo3.php">
                                        <div class="start"><img src="imagens/meu-aprendizado/play-arrow.png" alt="comece"> Start</div>
                                    </a>
                                </div>
                                <div class="seu-progresso">
                                    <h4>Seu progresso</h4>
                                    <p class="porcentagem">75%</p>
                                    <div class="barra-progresso">
                                        <div class="progresso"></div>
                                    </div>
                                </div>
                            </div>
                            <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow2" onclick="abre_fecha(2, 1)">
                        </div>
                    </div>
                    <div class="borda container-capitulos-direita cap4" id="cap4">
                        <div class="capitulos">
                            <div class="superior-cap"  onclick="abre_fecha(3, 1)">
                                <h3>Revisão de Conteúdos e Utilizar o Estado Difuso</h3>
                                <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow1">
                            </div>
                            <div class="inferior-cap">
                                <img src="imagens/meu-aprendizado/revisao.jpg" alt="imagem ilustrativa sobre revisão" class="imagens-ilustrativas">
                                <p>Bote em prática métodos de revisão que ajudam você a reter as informações mais importantes e a identificar pontos que precisam de mais atenção. Além disso, exploramos a utilização do "estado difuso", um conceito que envolve dar espaço ao cérebro para processar as informações de forma subconsciente, permitindo insights e compreensão mais profundos.</p>
                                <div class="container-start">
                                    <a href="capitulos/capitulo4.php">
                                        <div class="start"><img src="imagens/meu-aprendizado/play-arrow.png" alt="comece"> Start</div>
                                    </a>
                                </div>
                                <div class="seu-progresso">
                                    <h4>Seu progresso</h4>
                                    <p class="porcentagem">75%</p>
                                    <div class="barra-progresso">
                                        <div class="progresso"></div>
                                    </div>
                                </div>
                            </div>
                            <img src="icons/icon-arrow-down.png" alt="abrir descrição do capítulo" class="arrow-down arrow2"  onclick="abre_fecha(3, 1)">
                        </div>
                    </div>
                </div>
            </main>


            <?php
                include('footer-escuro.php');
            ?>

            <script src="script.js"></script>
    </body>
</html>    