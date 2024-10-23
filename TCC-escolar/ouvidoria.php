<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/ouvidoria.css">
    <link rel="stylesheet" href="styles/mediaquerys/ouvidoria-mediaquery.css">
    <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
    <title>Ouvidoria</title>
</head>
<body>
    <header>
        <img src="imagens/logo-estudo-expresso-fundo-escuro.png" alt="Estudo & Expresso" class="logo">
        <div>
            <nav>
                <a href="index.html">INICIO</a>
                
                <a href="quem-somos.html">SOBRE NÓS</a>
                <a href="meu-aprendizado.html">MEU APRENDIZADO</a>
                <div>
                    <a href="formularios/cadastro.html"class="cadastro">CADASTRO</a>
                    <a href="formularios/login.html">LOGIN</a>
                </div>
            </nav>
        </div>
    </header>


    <main>
        <div class="container-topo-ouvidoria">
            <div class="ouvidoria">
                <span class="titulo-destaque">Ouvidoria</span>
                <h1>Olá, como podemos ajudar?</h1>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, dolor veritatis dolorum reprehenderit, quasi in velit provident minus nostrum aliquid excepturi laborum nobis, dolore facere repellendus exercitationem porro natus neque? Lorem, ipsum dolor sit amet consectetur adipisicing elit?</p>
        </div>

        <div class="posicionar">
            <form action="https://formsubmit.co/org.estudoexpresso@gmail.com " method="POST">
                <h2>Registre o seu comentário</h2>
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

        <div class="limite">
            <div class="importancia-comentario">
                <div class="textos-metade">
                    <h2>E você, pode nos ajudar?</h2>
                    <p>"Sentimos na pele a frustração de estar perdido em um mar de informações sem saber como transformar aquilo em conhecimento útil e aplicável. Foi a partir dessa experiência que percebemos uma falha crítica no ensino tradicional: a ausência de um verdadeiro guia para aprender a aprender."</p>
                    <aside>- Fundadores</aside>
                </div>
                <img src="imagens/ouvidoria/ouvidoria.png" alt="" class="imagem-metade">
            </div>
        </div>

    </main>
    
    <?php
        include('footer-escuro.html');
    ?>
</body>
</html>