<?php
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/tcc-escolar/tcc-escolar";
?>
<header>
    <img src="imagens/logo-estudo-expresso-fundo-escuro.png" alt="Estudo & Expresso" class="logo">
    <div>
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">INICIO</a>
            
            <a href="<?php echo $base_url; ?>/quem-somos.php">QUEM SOMOS?</a>
            <a href="<?php echo $base_url; ?>/meu-aprendizado.php">MEU APRENDIZADO</a>
            <div>
                <button class="cadastro deslogar" onclick="logout()">Deslogar</button>
            </div>
        </nav>
    </div>
</header>

