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
    <title>Importância do Sono</title>
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
    </header>
    <main>

        <section>
            <h1 onload="sequestraPag()" id="topocap">Importância do Sono</h1>
            <aside>Ryan de Souza Silva <span>Publicado: Outubro 12, 2024</span> Atulizado Outubro 12, 2023</aside>
            <hr>
        </section>

        <div class="pagina">
            <section class="aviso-importante">
                <h2>Aviso importante <img src="imagens/icon-alert.png" alt="icone alerta" class="alerta"></h2>
                <p>
                    Muitas pessoas, devido a obrigações do cotidiano, como trabalho, faculdade, serviços domésticos, dentre outras obrigações, acabam não conseguindo dormir a quantidade recomendada de horas. Isso já aconteceu comigo e talvez esteja acontecendo com você agora. Se for esse o caso, busque maneiras de melhorar o seu sono dentro da sua realidade, implemente aquilo que estiver ao seu alcance. E o mais importante de tudo, busque mudar essa realidade. 
                </p>

                <p>
                    Ninguém vive nessa situação porque quer, e nós entendemos isso, mas viver nessas condições é extremamente prejudicial para a sua saúde. Dormir mal, por períodos longos de tempo, pode gerar danos irreparáveis ao seu cérebro, além de potencializar ou ser a causa do início de diversas doenças, como: problemas cardiovasculares, derrames, infartos, pressão alta, diabetes, obesidade e a maioria das doenças neurológicas, como Alzheimer, doença de Parkinson, depressão, ansiedade, dentre muitas outras.
                </p>

                <p>
                    A técnica de acordar em períodos de sono mais leves para ter mais disposição e as dicas presentes no capítulo não são milagrosas. Regular o seu ciclo circadiano é algo muito difícil, principalmente no começo, já que o sono é cumulativo, além de mexer com os seus hormônios, te fazendo ficar irritado, mal e cansado – se sentindo um lixo. Durante esse período, não se exija tanto, isso é algo custoso, mas é um dos maiores gestos de amor e autocuidado que você poderá fazer por si mesmo.
                </p> 
            </section>
            <section class="ciclo-circadiano">
                <h2>Ciclo circadiano</h2>
                <p>
                    O ciclo circadiano é como um relógio interno que regula as funções do nosso corpo ao longo de um período de 24 horas. Ele controla coisas como o sono, a temperatura corporal, a liberação de hormônios e até o apetite. De forma didática, pode-se dizer que ele diz para o nosso corpo o horário em que cada função deve ocorrer.
                </p>
                <img src="imagens/ciclo-circadiano.jpg" alt="imagem ilustrativa ciclo do sono" class="img-total">
                <p>
                    Esse ciclo é guiado principalmente pela luz natural e ajuda o corpo a entender quando é hora de estar alerta e ativo ou descansar. Estar em estado de alerta é o oposto de estar dormindo, porém, por ser um ciclo, esses estados estão diretamente ligados. Se você tem uma noite de sono meio ruim, o seu estado de alerta também estará meio ruim. 
                </p>
                <p>
                    O cérebro possui uma área chamada núcleo supraquiasmático (NSQ), localizada no hipotálamo – sim, eu disse um monte de nomes difíceis, mas prometo que vou deixar fácil de entender –, que atua como “chefe” desse relógio. Ele responde à luz que entra pelos olhos e ajusta o funcionamento do corpo.
                </p>
                <img src="imagens/nucleo-supraquiasmatico.jpeg" alt="imagem ilustrativa ciclo do sono" class="img-centralizada">
                <ul>
                    <li>
                        <strong>De manhã:</strong> Quando a luz do sol atinge seus olhos, o “Chefe” percebe que é dia. Ele reduz a produção de <strong>melatonina</strong> (o hormônio do sono) e aumenta a liberação de <strong>cortisol</strong> – é como se te desse um grito e te servisse um café –, para te dar um tranco, o que te deixa mais alerta e cheio de energia para começar o dia e trabalhar.
                    </li>
                    <li>
                        <strong>Durante o dia:</strong> Ele vai te motivando, para que você possa realizar as suas tarefas. O sangue esquenta e a sua temperatura corporal aumenta, e o corpo entra em um estado de alta produtividade e desempenho físico.
                    </li>
                    <li>
                        <strong>No fim da tarde:</strong> Quando a luz natural diminui, o Chefe não quer ser alvo das leis trabalhistas, então não pode ficar te explorando, assim, ele sinaliza ao seu corpo que deve produzir melatonina novamente, o que ajuda a relaxar e se preparar para o sono.
                    </li>
                </ul>

                <p>Se o ciclo estiver funcionando bem, você sente energia durante o dia e consegue dormir bem à noite. Você pode até estar dormindo relativamente bem – em quantidade de horas –, mas se o seu ciclo não estiver sincronizado com o dia, você pode sentir cansaço nas horas em que tem de fazer alguma atividade, desperdiçando os seus picos de alerta, dificultando a concentração e/ou tendo problemas para dormir na hora certa. Simples, não?</p>
            </section>
            <section class="regulando-ciclo-circadiano">
                <h2>Dicas para regular o seu ciclo</h2>

                <ol>
                    <li><strong>Exponha-se à luz do sol pela manhã.</strong> Receber luz natural não se trata de tomar Sol, abra as janelas e deixe a luz preencher o ambiente, se possível, tome café pegando luz natural, pare um pouco para dar uma olhada no movimento da rua ou na vista.</li>
                    <li><strong>Evite telas e luzes brancas fortes à noite</strong>, ao final da tarde, coloque o celular ou pc no modo noturno – aquele que deixa a tela mais amarelada –, desligue o máximo possível de luzes brancas e opte por luzes mais amareladas. Isso pode parecer algo frívolo, mas nós, seres humanos, por milhares de anos, evoluímos dormindo ao lado de fogueiras. O nosso cérebro correlaciona naturalmente esse tipo de luz ao sono e nos prepara para dormir, te ajudando a sentir sono nas horas certas sem auxílio de remédios, tendo melhor qualidade de sono.</li>
                    <li><strong>Durma e acorde sempre nos mesmos horários</strong>, para acostumar o seu cérebro com o horário que deve estar alerta e em repouso. Faça isso inclusive nos finais de semana, já que, para o seu corpo, finais de semana não se diferenciam de dias normais, então irão bagunçar sua rotina.</li>
                    <li><strong>Não beber café após as 16h</strong> é o ideal para a maioria das pessoas, segundo estudo. O efeito dela é varia no organismo de cada um, então, se pretende dormir por volta das 10h às 12h, nós indicamos esse horário. A cafeína interfere nas nossas fases do sono e mesmo que você consiga dormir no horário certo, ela diminuirá a qualidade do seu sono.</li>
                </ol>
            </section>
        </div>

        <div class="pagina">
            <section class="ciclo-do-sono">
                <h2>Qual a função do sono em nossa rotina?</h2>
                <p>Você entendeu que dormir é o inverso de estar em estado de alerta. Agora, entendendo como funciona as etapas do seu sono, você aprende a importância de cada uma delas para as atividades que você quer realizar durante o dia e pode aproveitar de meios que te façam acordar nos momentos certos para se sentir mais disposto durante a manhã.</p>
                <h3>Ciclo do sono</h3>
                <p>Dentro do ciclo circadiano temos o ciclo do sono, dividido em fases que se repetem em ciclos de 90 a 120 minutos. Durante essas fases, o cérebro realiza diferentes funções que impactam diretamente a saúde física, mental e emocional. As fases são NREM (Movimento Não Rápido dos Olhos) e REM (Movimento Rápido dos Olhos). Não atente-se aos nomes técnicos, tente compreender por cima o que acontece dentro da sua cabeça ao passar por cada fase:</p>

                <div class="fases-do-sono">
                    <h4>Fase NREM 1 – Adormecimento</h4>
                    <h5>O que acontece no cérebro?</h5>
                    <p>Nesta fase inicial, o seu cérebro reduz a atividade, com ondas principais de alta frequência (beta e alfa) conduzindo para ondas beta mais lentas. Essa desaceleração marca a transição entre estar acordado e dormir. É quando começamos a “desligar” mentalmente, mas ainda podemos acordar facilmente.</p>
                    <h5>Importância:</h5>
                    <ul>
                        <li>Permite o relaxamento inicial do corpo;</li>
                        <li>Facilita a entrada nas próximas fases do sono.</li>
                    </ul>
                </div>
                <div class="fases-do-sono">
                    <h4>Fase NREM 2 – Sono leve</h4>
                    <h5>Fase NREM 2 – Sono leve</h5>
                    <p>Os "fusos de sono" surgem nesta fase, ou seja, explosões rápidas de atividade elétrica que ajudam a consolidar memórias e estabilizar a comunicação entre neurônios. A atividade cerebral diminui, mas ainda há interações importantes.</p>
                    <h5>Importância:</h5>
                    <ul>
                        <li>Crucial para o processamento inicial de informações e aprendizagem;</li>
                        <li>Crucial para o processamento inicial de informações e aprendizagem.</li>
                    </ul>
                </div>
                <div class="fases-do-sono">
                    <h4>Fase NREM 3 – Sono profundo</h4>
                    <h5>O que acontece no cérebro?</h5>
                    <p>Ondas lentas chamadas <strong>ondas delta</strong> dominam a atividade cerebral. Durante essa fase, ocorre uma "limpeza" do cérebro: as conexões sinápticas são reorganizadas e o fluido cerebrospinal remove toxinas acumuladas ao longo do dia.</p>
                    <h5>Importância:</h5>
                    <ul>
                        <li>Promova a recuperação física e regeneração celular;</li>
                        <li>Fortalece o sistema imunológico;</li>
                        <li>Consolidar informações práticas e motoras, como habilidades adquiridas.</li>
                    </ul>
                </div>
                <div class="fases-do-sono">
                    <h4>Fase REM – Sono dos sonhos</h4>
                    <h5>O que acontece no cérebro?</h5>
                    <p>A atividade cerebral é intensa, semelhante ao estado de vigília. Durante essa fase, o hipocampo e o córtex cerebral trabalham juntos para consolidar memórias emocionais e reorganizar informações adquiridas. É também quando os sonhos mais vívidos ocorrem.</p>
                    <h5>Importância:</h5>
                    <ul>
                        <li>Essencial para o processamento emocional;</li>
                        <li>Melhora a criatividade e a resolução de problemas;</li>
                        <li>Consolidar memórias de longo prazo.</li>
                    </ul>
                </div>
            </section>

            <section class="acodando-disposto">
                <h3>Como acordar disposto pela manhã</h3>
                <p>Já chegou a dormir de 7h a 10h, ou talvez um pouco mais, e mesmo assim acordar cansado ou sonolento? Em contra partida, em outro dia, você dormiu pouco mas acordou alerta e enérgico? Isso é extremamente comum e pode ser usado por nós para acordarmos bem durante a semana, mesmo em dias corridos.</p>
                <p>Observe como essa ordem se repete algumas vezes até a hora de acordarmos:</p>
                <img src="imagens/ciclos-do-sono.png" alt="arquitetura do sono" class="img-centralizada">
                <p>Para aliviar aquela sensação de cansaço ou desorientação, conhecida como <strong>inércia do sono</strong>, melhor fase do ciclo de sono para acordar sem se sentir cansado é durante a fase <strong>NREM 1</strong> ou no final da <strong>fase REM</strong>. Como pode observar na imagem, nessas fases o sono é mais leve, e o corpo está mais próximo de um estado de vigília natural (quase acordado), facilitando o despertar.</p>
                <p>Para acordar durante esses períodos, nós recomendamos o uso de aplicativos ou dispositivos de monitoramento do sono, que detectam sua fase de sono e ajustam o alarme para o momento mais adequado dentro de um intervalo. Mas, você também pode realizar o cálculo.</p>
                <h4>Potencializando o seu estudo</h4>
                <p>O sono é fundamental para o aprendizado e os estudos. Durante a fase NREM 2, o cérebro reforça conexões neuronais que ajudam na retenção de informações. A fase NREM 3 consolida habilidades práticas, enquanto o REM reorganiza e armazena o conhecimento adquirido, além de estimular a criatividade para resolver problemas complexos. Dormir compreender é tão importante quanto estudar, pois é durante o sono que o cérebro transforma o aprendizado do dia em conhecimento duradouro.</p>
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