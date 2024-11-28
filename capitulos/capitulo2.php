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
    <title>Lide com a falta de foco, desânimo e motivação</title>
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
            <h1 onload="sequestraPag()" id="topocap">Lide com a falta de foco, desânimo e motivação</h1>
            <aside>Ryan de Souza Silva <span>Publicado: Outubro 12, 2024</span> Atulizado Outubro 12, 2023</aside>
            <hr>
        </section>

        <div class="pagina">
            <section class="introducao">
                <p>
                    Opa, como vai? Espero que bem. Bom, quero te fazer uma pergunta, você já se sentiu desanimado(a) ao tentar estudar ou realizar uma tarefa importante? Ou talvez tenha se perguntado por que é tão difícil se concentrar, mesmo quando você sabe que precisa fazer algo? Pode ser que você já tenha passado horas assistindo a vídeos curtos ou navegando em redes sociais, enquanto aquela tarefa essencial continuava esperando. Se sim, você não está sozinho(a).
                </p>
                
            </section>
            <div class="imagem-conteudo img-foco"></div>
            <section class="introducao">
                <p>
                    Muitas vezes, ficamos frustrados com nossa própria falta de motivação e foco. Mas você já parou para pensar o que leva o seu cérebro a realizar (ou não) uma tarefa? Por que, às vezes, é fácil se perder em distrações, mas tão difícil se concentrar no que realmente importa? Talvez eu possa te ajudar a entender como você funciona um pouco melhor.
                </p>
            
                <h2>Por que Não Temos Mais Foco?</h2>
                <div class="texto-imagem">
                    <p class="texto-metade">
                        O nosso nível de foco e motivação está diretamente ligado a um neurotransmissor produzido no nosso cérebro, chamada dopamina. A dopamina é responsável por nos motivar e direcionar o nosso foco e esforços a realização de tarefas que nos provoquem prazer, satisfação ou interesse. Ela é o "empurrãozinho" que sentimos para começar e continuar uma tarefa. Assim, entender o funcionamento da dopamina é essencial para que possamos direcionar a nossa atenção ao que realmente queremos realizar, ou saber por que, muitas das vezes, nossa capacidade de focar está prejudicada.
                    </p>
                    <img src="imagens/conhecendo-cerebro.png" class="img-metade img-direita">
                </div>

                <h3>Como funciona a liberação de dopamina?</h3>

                <p>
                    A dopamina é liberada em grande escala quando passamos por algum estímulo prazeroso e satisfatório, como navegar no feed de uma rede social, treinar, comer um doce, rir de uma piada, estudar, dentre outras coisas. No entanto, esses picos de prazer vêm acompanhados de uma queda rápida, como uma montanha-russa que despenca logo após subir. Após um alto pico de dopamina, tendemos a sentir uma queda severa, o que nos faz desanimar.
                </p>

                <p>
                    Agora, imagine que você começa o seu dia checando as redes sociais. Seu cérebro recebe uma alta dose de prazer sem ter que fazer esforço algum. Logo depois, você tenta estudar, algo que naturalmente é mais cansativo do que jogar algum jogo ou ver navegar nas redes sociais, mas sente uma dificuldade enorme para se concentrar. Isso acontece porque você já gastou boa parte da sua dopamina em algo que foi instantaneamente prazeroso. E cara, eu posso apostar que essa situação te foi familiar.
                </p>
                <img src="imagens/desanimada.jpg" class="img-centralizada" alt="">
                <p>Agora, pense comigo, tarefas minimamente produtivas ou necessárias, como estudar, limpar a casa, treinar, trabalhar, etc., só oferecem satisfação após certo esforço, não? É um prazer MUITO maior, mas a longo prazo. Você tem que entender que o seu cérebro busca o prazer, mas prioriza economizar energia. Então, para ele, essas tarefas são muito menos atraentes, já que, se você ficar o dia todo no celular, também pode obter prazer.</p>
                <p>Perceba que, quando você não tem o costume de fazer alguma dessas tarefas e quer começar um novo hábito produtivo, você entra em um cabo de guerra com o seu cérebro, disputando para onde vai a sua atenção. Entender isso é quase libertador. Te faz perceber que todas as vezes que você conseguiu dar início a um projeto desses, você brigou com o seu cérebro e venceu, tornando a conquista ainda mais gratificante.</p>
                <p>Por outro lado, percebe-se qual foi o motivo de falha em outros momentos, o que não tira a sua responsabilidade pelo ato, mas te dá uma nova arma para ser usada em um novo começo.</p>
            </section>
        </div>

        <div class="pagina">
            <section>
                <h2>Qual o custo de manter hábitos destrutivos?</h2>
                <p><span class="mark">Agora vou abordar algo muito importante</span> e peço que, por favor, preste atenção. Hábitos dopaminérgicos não estão ligados somente a drogas ilícitas ou substâncias como álcool. Eles podem incluir comportamentos comuns e socialmente aceitos, como o consumo excessivo de doces, redes sociais, pornografia e até mesmo conversas comuns e relacionamentos tóxicos no nosso dia-a-dia, que drenam nossa energia mental.</p>

                <h3>Entrando em vícios</h3>
                <p>E aqui está o perigo: se mantermos essas atividades que injetam sempre esse prazer alto e imediato, para regular a situação, o nosso cérebro começa a criar uma certa "tolerância" ao prazer. Acabamos também, por desgastar certas áreas no nosso cérebro que trabalham em frear e controlar esses impulsos, e é assim que perdemos o controle e entramos em um vício. Mesmo que não seja em drogas, podemos nos viciar em comportamentos simples, mas que também interfiram negativamente sua saúde e vida cotidiana.</p>
                <p>Da mesma forma que alguém que usa drogas precisa de doses cada vez maiores para sentir o mesmo efeito, o nosso cérebro precisa de estímulos cada vez mais intensos para se sentir motivado. Por isso, é tão difícil abandonar hábitos ruins e começar novos hábitos produtivos. </p>
            </section>
        </div>
        <div class="pagina">
            <h2>pagina3</h2>
        </div>
        <div class="pagina">
            <h2>pagina4</h2>
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