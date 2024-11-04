<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mediaquerys/header-mediaquery.css">
    <link rel="stylesheet" href="styles/inicio.css" media="screen">
    <link rel="stylesheet" href="styles/mediaquerys/inicio-mediaquery.css">
    <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
    <title>Estudo & Expresso</title>
</head>
<body>
    <?php
        session_start(); // Inicia a sessão para verificar se o usuário está logado
        include 'connection.php';

        if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) {
            // Usuário logado - inclui o header para usuários cadastrados
            include('header-usuario.php');
        } else {
            // Usuário não logado - inclui o header para usuários não cadastrphp
            include('header.php');
        }
    ?>
    <main>
        <section id="container-topo">
            <div class="divisao-topo-textos">
                <h2 class="titulo-destaque">Aprenda a aprender</h2>
                <h1>E CONSTRUA O PRÓPRIO AMANHÃ</h1>
                <p>Estudo & Expresso é o seu espaço para aprender de forma eficiente e motivada. Oferecemos ferramentas e dicas para que o estudo faça parte de sua rotina, ajudando você a construir um futuro com confiança.</p>
                <div>
                    <a href="formularios/cadastro.html" class="link-cadastro">
                        <div class="cadastro">Cadastre-se</div>
                    </a>
                </div>
            </div>
            <div class="divisao-topo-imagem"><img src="imagens/livros.png" alt=""></div>
        </section>
        
        
        <section class="nossos-servicos">
            <hr class="separacao-topo">
            <div class="inicio-da-jornada">
                <h1>Inicie sua própria jornada</h1>
                <p class="rumo-ao-futuro">Seremos o seu alido no inicio dessa jornada de aprimoramento pessoal. Siga através da educação auto-dirigida, rumo ao futuro que sempre desejou.</p>
                
                
            </div>
            
            <div class="passos">
                
                <h3 class="titulo-destaque">Não sabe por onde começar?</h3>
                    <h2>Pegue um café e explore conosco as melhores formas de...</h2>
                    <div class="limite">
                        <div class="borda">
                            <div class="caps">
                                <video src="animacoes/animacao-organizacao.webm" autoplay muted loop></video>
                                <div class="conteudo-caps">
                                    <h4>Organizar o seu estudo</h4>
                                    <p>Estruture seu plano, crie um cronograma, gerencie tarefas e monitore seu progresso.</p>
                                </div>
                                <a href="meu-aprendizado.php#cap1" class="ver-mais" onclick="ver_mais(1)">Ver mais</a>
                            </div>
                        </div>
                        <div class="borda">
                            <div class="caps">
                                <video src="animacoes/animacao-foco.webm" autoplay muted loop></video>
                                <div class="conteudo-caps">
                                    <h4>Manter o foco e a Motivação</h4>
                                    <p>Use estratégias para manter a motivação, superar o desânimo e melhorar a concentração.</p>
                                </div>
                                <a href="meu-aprendizado.php#cap2" class="ver-mais">Ver mais</a>
                            </div>
                        </div>
                        <div class="divide-caps"></div>
                        <div class="borda">
                            <div class="caps">
                                <video src="animacoes/animacao-sono.webm" autoplay muted loop></video>
                                <div class="conteudo-caps">
                                    <h4>Importância do Sono e do Ócio</h4>
                                    <p>Aprenda a utilizar sono e descanso a assimilação do conteúdo e saúde mental, melhorando retenção e clareza.</p>
                                </div>
                                <a href="meu-aprendizado.php#cap3" class="ver-mais">Ver mais</a>
                            </div>
                        </div>
                        <div class="borda">
                            <div class="caps">
                                <video src="animacoes/animacao-revisar.webm" autoplay muted loop></video>
                                <div class="conteudo-caps">
                                    <h4>Revisão de Conteúdos e Utilizar o Estado Difuso</h4>
                                    <p>Aplique métodos de revisão para fixar informações e utilize o "estado difuso" para insights mais profundos.</p>
                                </div>
                                <a href="meu-aprendizado.php#cap4" class="ver-mais">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-beneficios">
                <div class="beneficios beneficios-fundo1">
                    <div class="limite">
                        <img src="imagens/organizar-estudos.jpeg" alt="imagem ilustrativa de organização">
                        <div class="conteudo">
                            <h4>Benefícios do estudo</h4>
                            <p>Estudar pode aumentar a capacidade da memória, ativar o poder de concentração e, com o hábito, aumentar a nossa capacidade de aprender. Quanto mais estudamos e exercitamos o cérebro, mais protegido ele estará de doenças de degeneração, como o mal de Alzheimer, por exemplo.</p>
                        </div>
                    </div>
                </div>
                <hr class="separacao-topo">
                <div class="beneficios beneficios-fundo2">
                    <div class="limite">
                        <div class="conteudo">
                            <h4>Se torne sua melhor versão</h4>
                            <p>Hoje, com o acesso facilitado à informação, aprender nunca foi tão fácil e acessível, tornando a busca por conhecimento um caminho de autodescoberta e liberdade.</p>
                        </div>
                        <img src="imagens/desanimo.jpeg" alt="imagem ilustrativa desanimo">
                    </div>
                </div>
                <a href="formularios/cadastro.html"  class="link-cadastro">
                    <div class="cadastro">Cadastre-se</div>
                </a>
            </div>
        </section>
        <section class="nossa-missao">
            <div class="arte-de-estudar">
                <img src="imagens/coffee-7057030_1280.png" alt="imagem ilustrativa">
                <div class="textos">
                    <h2><span>"</span>O ser humano é aquilo que a educação faz dele.<span>"</span></h2>
                    <aside>- Immanuel Kant, filósofo alemão.</aside>
                    <p>Para nós da Estudo & Expresso, estudar é uma verdadeira arte. É uma jornada contínua que nos engrandece, onde nos desafiamos a crescer, questionar e superar nossos limites. O aprendizado autodirigido permite que exploremos novas possibilidades, abrindo caminho para construirmos a nossa melhor versão.</p>
                </div>
            </div>
        </section>
    </main>
    
    
    <?php
        include('footer.php');
    ?>

    
    <script src="scripts/testaessamerda.js"></script>
</body>
</html>