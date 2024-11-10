<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/mediaquerys/header-mediaquery.css">
        <link rel="stylesheet" href="styles/ouvidoria.css">
        <link rel="stylesheet" href="styles/mediaquerys/ouvidoria-mediaquery.css">
        <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
        <link rel="shortcut icon" href="icons/coffee-ico.ico" type="image/x-icon">
        <title>Ouvidoria</title>
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
            <div class="container-topo-ouvidoria">
                <div class="ouvidoria">
                    <span class="titulo-destaque">Ouvidoria</span>
                    <h1>Olá, como podemos ajudar?</h1>
                </div>
                <p>Aqui, na ouvidoria da Estudo & Expresso, você pode se sentir à vontade para fornecer seu feedback, pois ele será analisado com atenção por Milton e sua equipe experiente. Estamos comprometidos em resolver qualquer questão com rapidez e eficiência, para te ajudar e melhorar constantemente nossos serviços, proporcionando uma experiência cada vez mais enriquecedora.</p>
            </div>
            
            <div class="fundo-claro">
                <div class="limite">
                    <div class="container-texto-imagem-metade">
                        <div class="textos-metade">
                            <h2>E você, pode nos ajudar?</h2>
                            <p>Seu feedback não apenas nos orienta em nossa evolução, mas também inspira e motiva nossa equipe a seguir firme em nosso ideal de educação de qualidade. Juntos, podemos tornar o Estudo & Expresso uma plataforma que se adapta e cresce conforme suas necessidades.</p>
                            <aside><strong>- Fundadores</strong></aside>
                        </div>
                        <img src="imagens/ouvidoria/relacionamento-cliente.png" alt="" class="imagem-metade">
                    </div>
                </div>
            </div>
            <div class="posicionar">
                <form action="https://formsubmit.co/org.estudoexpresso@gmail.com " method="POST">
                    <h2>Registre o seu <span class="texto-cor-destaque">comentário</span></h2>
                    <textarea name="comentario" id="" placeholder="Digite aqui o seu comentário..." required maxlength="450"></textarea>

                    <h3>Qual o objetivo do seu comentário?</h3>
                    <div class="container-opcoes">
                        
                        <div class="opcoes">
                            <input type="checkbox" name="" id="Fazendo uma critica" value="critica">
                            <label for="critica">Criticar</label>
                        </div>

                        <div class="opcoes">
                            <input type="checkbox" name="" id="elogio" value="Fazendo um elogio">
                            <label for="elogio">Elogiar</label>
                        </div>
                        
                        <div class="opcoes">
                            <input type="checkbox" name="" id="dica" value="Dando uma dica"><label for="dica">Dar alguma dica</label>
                        </div>

                        <div class="opcoes">
                            <input type="checkbox" name="" id="erro" value="Reportando erro"><label for="erro">Reportar erro</label>
                        </div>
                    </div>

                    <input type="submit" value="Enviar" class="enviar">

                    <input type="hidden" name="_subject" value="Novo comentário!">
                    <input type="hidden" name="_next" value="https://ryanss27.github.io/TCC-escolar/TCC-escolar/index.html">
                    <input type="hidden" name="_captcha" value="false">
                    <input type="text" name="_honey" style="display: none;">
                </form>
            </div>

            <div class="fundo-claro">
                <div class="limite curriculo-milton">
                    <div class="container-texto-imagem-metade">
                        <img src="imagens/ouvidoria/relacionamento-cliente.png" alt="" class="imagem-metade">
                        <hr class="separacao">
                        <div class="textos-metade">
                            <h2>Quem é o Milton?</h2>
                            <p>Milton, líder da equipe de ouvidoria, tem ampla experiência em empresas como EduTech e Google, onde trabalhou como supervisor de atendimento e qualidade, se destacando pela capacidade de transformar feedbacks em melhorias. Formado em Administração com especialização em Gestão de Relacionamento, possui certificações em desenvolvimento de equipes e análise de satisfação do cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    
    <?php
        include('footer.php');
    ?>
    <script src="scripts/testaessamerda.js"></script>
</body>
</html>