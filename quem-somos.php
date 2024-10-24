<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/quem-somos.css">
    <link rel="stylesheet" href="styles/mediaquerys/quem-somos.css">
    <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
    <title>Quem somos?</title>
</head>

<body>
    <?php
        include('header.php');
    ?> 


    <main>
        <div class="bloco-topo">
        </div>
        <div class="o-que-fazemos">
            <div class="texto">
                <div class="sobre-nos">
                    <span>Sobre nós</span>
                    <h1>Estudo & Expresso</h1>
                    <hr>
                </div>
                <div>
                    <h2>Se engrandeça através da aprendizagem</h2>
                    <p class="p-o-que-fazemos">Na Estudo & Expresso, ajudamos as pessoas a se autodescobrirem e crescerem através da aprendizagem, tornando-a uma jornada prazerosa. Nosso objetivo é capacitar você a iniciar sua jornada de estudos com independência, construindo um caminho de conhecimento que reflita seus sonhos e ambições. Com a gente, aprender deixa de ser uma obrigação e vira um hábito agradável</p>
                </div>
            </div>
            <div class="image">
                <div><img src="imagens/quem-somos/estudando-com-café.png" alt=""></div>
            </div>
        </div>


        <div class="fundadores">
            <h2>Fundadores</h2>
            <div class="fundador">
                <div class="cargos">
                    <img src="imagens/quem-somos/daniel.jpeg" alt="">
                    <div class="pessoa-cargo">
                        <h3>Daniel</h3>
                        <span>CEO / Co-fundador</span>
                    </div>
                </div>
                <p>Diretor de mídia, gerente de desenvolvimento e da Naju.</p>
            </div>
            <div class="fundador">
                <div class="cargos">
                    <img src="imagens/quem-somos/alex.jpeg" alt="">
                    <div class="pessoa-cargo">
                        <h3>Alex</h3>
                        <span>CEO / Co-fundador</span>
                    </div>
                </div>
                <p>Chefe do marketing, diretor jurídico e o mano do canva</p>
            </div>
            <div class="fundador">
                <div class="cargos">
                    <img src="imagens/quem-somos/ryan.jpeg" alt="">
                    <div class="pessoa-cargo">
                        <h3>Ryan</h3>
                        <span>CEO / Co-fundador</span>
                    </div>
                </div>
                <p>Desenvolvedor web, cordenador de planejamento e Corintiano</p>
            </div>
        </div>

        <div class="nossa-historia">
            <div class="limite">
                
                    
                <div class="textos-metade">
                    <span>Nossa história</span>
                    <h2>Criação do projeto</h2>
                    <hr>
                    <p>"Sentimos na pele a frustração de estar perdido em um mar de informações sem saber como transformar aquilo em conhecimento útil e aplicável. Foi a partir dessa experiência que percebemos uma falha crítica no ensino tradicional: a ausência de um verdadeiro guia para aprender a aprender."</p>
                    <p>"Queremos fazer algo por todos que passam pelo mesmo que nós passamos. Estamos aqui para ajudar você a se tornar um aprendiz independente, um autodidata que nunca para de crescer. Porque acreditamos que o conhecimento é a ferramenta mais poderosa para transformar vidas."</p>
                    <aside>- Fundadores</aside>
                </div>
                <img src="imagens/quem-somos/teste-final.png" alt="" class="imagem-metade">
            </div>
        </div>
        <div class="nossa-missao-valores">
            <div class="limite">
                <h2>Nossos pilares</h2>
                <div class="container-pilares">
                    <div class="pilares">
                        <img src="imagens/quem-somos/imgs-icons/inspiracao.png" alt="" class="icons-pilares">
                        <hr>
                        <h3>Inspiração</h3>
                        <div class="textos-pilares">
                            <p>Transformar o aprendizado em algo inspirador e acessível a todos.</p>
                        </div>
                    </div>
                
                    <div class="pilares"><img src="imagens/quem-somos/imgs-icons/automia.png" alt="" class="icons-pilares">
                        <hr>
                        <h3>Autonomia</h3>
                        <div class="textos-pilares">
                            <p>Queremos ensinar as pessoas a dirigirem sua própria aprendizagem, tornando-a prazerosa e significativa.</p>
                        </div>
                    </div>
                    <div class="pilares"><img src="imagens/quem-somos/imgs-icons/curiosidade.png" alt="" class="icons-pilares">
                        <hr>
                        <h3>Curiosidade</h3>
                        <div class="textos-pilares">
                            <p>Valorizamos a curiosidade, a autonomia e o compromisso com o crescimento contínuo.</p>
                        </div>
                    </div>
                    <div class="pilares"><img src="imagens/quem-somos/imgs-icons/caminho.png" alt="" class="icons-pilares">
                        <hr>
                        <h3>Sua jornada</h3>
                        <div class="textos-pilares">
                            <p>Acreditamos que todos podem aprender qualquer coisa, desde que encontrem o caminho certo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inicie-sua-jornada">
            <div class="limite">
                <h2>Inicie a sua jornada</h2>
                <p>O aprendizado é uma jornada sem fim, e estamos aqui para torná-la mais leve, inspiradora e gratificante. Não importa se você está começando ou se já percorreu um longo caminho, sempre há algo novo a descobrir. Venha conosco e embarque nessa aventura de autodescoberta e crescimento. Porque, na Estudo & Expresso, aprender é uma experiência que vai muito além dos livros.</p>
                <a href="formularios/cadastro.html"  class="link-cadastro">
                    <div class="cadastro">Cadastre-se</div>
                </a>
            </div>
        </div>

    </main>
    
    <?php
        include('footer.php');
    ?>

</body>

</html>