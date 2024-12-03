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
            <section class="direcionando-motivacao">
                <h2>Como se motivar e direcionar sua motivação</h2>
                <p>O foco e a motivação estão profundamente ligados. Para atingir altos níveis de concentração, como o estado de "flow" (um estado de hiperfoco onde o tempo parece parar), precisamos direcionar a nossa atenção. Mas, vimos que, muitas vezes, gastamos nossa dopamina com atividades fúteis, deixando pouco ou nada para o que realmente importa, como estudar, trabalhar, fazer exercícios físicos ou cuidar de relacionamentos. E como podemos convencer o nosso cérebro a se engajar em uma tarefa? </p>
                <h3>O Poder do Sentido</h3>
                <p>Mas você já se perguntou por que, quando o prazo de uma tarefa importante está próximo do fim, você consegue reunir todas as suas forças e se focar em terminar o trabalho? Isso acontece porque, nessas horas, o sentido da tarefa se torna claro — o medo de falhar ou a urgência de concluir a atividade aciona a motivação. Mas por que esperar até o último momento para agir?</p>
                <p>De acordo com o psicólogo Mihaly Csikszentmihalyi, somos movidos por motivos que fazem sentido para nós. Se você tem um "porquê" forte, você age. E essa motivação pode ser dividida em dois tipos:</p>
                <ol type="1">
                    <li><strong>Motivação Extrínseca:</strong> É aquela que vem de fora. Por exemplo, estude para passar em uma prova porque você precisa de uma boa nota ou trabalhar para ganhar dinheiro e pagar as contas. O valor dessas ações é definido por necessidades externas.</li>
                    <li><strong>Motivação Intrínseca:</strong> É o impulso que vem de dentro, algo que você faz por prazer e satisfação pessoal sem pensar em uma recompensa externa, mesmo que haja uma. que é quando uma pessoa faz algo por prazer e satisfação pessoal, sem pensar em uma recompensa. Imagine que você está realizando um trabalho de escola sobre um assunto que te interessa genuinamente. Mesmo que buscar a nota seja o objetivo, isso nem se torna tão importante, já que você está sentindo prazer em realizar a tarefa, porque aquilo atiçou a sua curiosidade. </li>
                </ol>
            </section>
            <div class="imagem-conteudo img-motivacao-intrinseca"></div>
            <section class="direcionando-motivacao">
                <p>Vamos focar na motivação intrínseca. Se não a entendeu direito, pode ficar tranquilo, pois vou dar outro exemplo. Vamos supor que você vê sua mãe chegando em casa cansada após um longo dia de trabalho, ela te cumprimenta e vai direto para a cama pela exaustão. Você então, vê que a pia está cheia de louça suja. Para que sua mãe não acabe se encarregando de lava-la, você se levanta e lava, mesmo sabendo que ela pode nem notar ou saber quem da casa a lavou. Percebe que não houve ordem direta ou elogio pelo ato e mesmo assim você o fez? Você encontrou um SENTIDO ESPECIAL, e a tarefa chata não era mais uma tarefa, e sim um gesto de afeto por alguém especial.</p>

                <h3>Dê sentido a tudo</h3>
                <p>Encontre motivos que sejam valiosos para você e que façam você querer agir, mesmo quando a tarefa parece difícil. O verdadeiro segredo para manter a motivação é fazer com que a jornada faça sentido. Quando você dá valor ao que está fazendo, não importa o quão difícil seja, você encontra um motivo para continuar.</p>
                <p>Para abandonar hábitos ruins e adotar bons hábitos, você precisa encontrar um motivo que faça sentido para você. Pode ser o desejo de orgulhar a si mesmo, de realizar um sonho pessoal ou de inspirar alguém que você ama. Ao identificar essas motivações internas, você receberá os prazeres imediatos com a satisfação de realizar algo que realmente importa.</p>
                <img src="imagens/realizacao.jpeg" alt="" class="img-centralizada">
                <p>Pense em um vício como o hábito de comer doces sempre que se sente estressado(a). Para mudar esse comportamento, você precisa colocar um novo hábito em conflito, algo que tenha um significado mais profundo. Por exemplo, comece a fazer caminhadas para aliviar o estresse. Mas dê sentido a isso. Faça porque você quer melhorar sua saúde e ter mais energia para que possa brincar com a sua filha, ou viver mais tempo para estar ao lado de quem ama.</p>
            </section>
        </div>
        <div class="pagina">
            <section class="solucao">
                <h2>Como usar isso tudo?</h2>
                <ol>
                    <li><strong>Comemore os pequenos passos. </strong>Se você quer completar um objetivo grande, como estudar para passar em algum vestibular ou concurso, focar nesse objetivo a logo prazo vai te cansar e te desanimar por não estar vendo resultados. Nós nos motivamos quando concluímos metas, por isso, divida um grande objetivo em micro-objetivos a médio e curto prazo, e comemore muito sempre que concluir algum deles.  </li>
                    <li><strong>Dê sentido a pequenas coisas. </strong>De sentido a coisas como levantar da cama, a acordar cedo. Não acorde cedo apenas porque tem que fazer outras coisas. Entenda o porquê ter um bom sono te faz bem e busque esses hábitos.</li>
                    <li><strong>Estabeleça pequenas metas durante o dia</strong>Se você começa o dia, realizando uma tarefa simples como arrumar o seu quarto de manhã, você começa o dia com uma pequena sensação de vitória.  Quando realizamos esses atos simples, nos motivamos e tendemos a querer completar as próximas tarefas do dia.</li>
                    <img src="imagens/metas.jpg" alt="" class="img-centralizada">
                    <li><strong>Elimine pequenos gatilhos que te levem aos maus hábitos. </strong>A dopamina ela é liberada antes mesmo de realizarmos alguma ação, para nos incentivar a fazer ela. Se só de pensar em algo que te dá prazer, te faz sentir vontade em fazer aquilo, tente eliminar gatilhos que te lembrem os mais hábitos.</li>
                    <p><strong>Exemplo:</strong> vamos supor que em determinado horário do seu dia você senta para descansar e está acostumado a pegar o seu celular. Porém, você percebe que, quando faz isso, você costuma perder muito tempo mexendo nas redes sociais. Então, procure outras formas de relaxar e descansar o seu cérebro, sem se passar por esses gatilhos.</p>
                    <li><strong>Mude o ambiente. </strong>Uma das coisas que mais nos protege de vícios é o ambiente. Se você está tentando se convencer a parar de mexer no celular e deixa um livro que te interessa por perto, aumentam as chances de você olhar para ele e pensar "acho que vou ler um pouco hoje". Se você vai ter um dia livre, sem coisas para fazer e não quer perder ele todo no celular, se programe, coloque atividades divertidas que você gosta. Não precisa estar sendo produtivo todos os dias, mas tente largar os hábitos que te fazem mal.</li>
                    <li><strong>Não seja tão duro consigo mesmo.</strong> Vai ter dias em que você não vai ter foco o suficiente para realizar aquilo que você queria. Você pode não estar se distraindo no celular, mas mesmo assim não conseguir ser produtivo. E isso não tem nada demais, todos temos dias difíceis. Há dias em que estamos cansados e o nosso máximo é o nosso 60%. Mesmo que você não consiga realizar as 3 horas de estudo que você separou para o dia, fazer pelo menos 1 hora, nem que seja de revisão, já é muito melhor do que não fazer nada. Entender que você não é uma máquina vai te ajudar no processo, se colocar para baixo vai te fazer mal.</li>
                    <img src="imagens/falha.jpg" alt="" class="img-centralizada">
                    <li><strong>Faça os seus deveres em dias ruins. </strong>Pode ser meio contraditório, mas, busque fazer as coisas em dias difíceis. Busque fazer as coisas mesmo que você esteja cansado ou que o seu dia não esteja tão bom. Quando terminar um dia ruim e perceber que conseguiu fazer algo, sentirá uma das melhores sensações de conquista que se pode ter durante a jornada.</li>
                    <li><strong>Crie hábitos de escape. </strong>Quando você estiver tendo um dia ruim e perceber que não vai conseguir estudar ou fazer determinada atividade, não importa o quanto tente, não deixe o dia ser perdido. Separe atividades mais simples que não façam você se sentir culpado por fazer elas ao invés de cumprir aquilo que você tinha planejado. Coisas simples como lavar a louça ou arrumar o quarto, são mais simples de se fazer muito melhores do que mexer no celular o dia todo.</li>
                    <li><strong>E por último, mas não menos importante...  <mark>se perdoe</mark>.</strong> Na verdade, acho que é o mais importante para algumas pessoas. Você pode, depois de muito tempo, ter perdido um hábito que você já tinha construído. Pode passar por um dia onde você não conseguiu fazer nada, nem mesmo realizar um hábito de escape. E está certo, você vacilou, mas lembre-se: você não é uma máquina. Você pode falhar, o que não pode é se conformar em falhar todas as vezes. Não desista. Veja aquilo que você fez que deu certo e tente repetir. Veja o que deu errado e tente evitar da próxima vez. Comece de novo, de novo e de novo, tente se perdoar e seguir em frente quantas vezes forem necessárias, só não desista.</li>

                    <img src="imagens/perdao.png" alt="" class="img-centralizada perdao">
                </ol>
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