<?php
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/tcc-escolar/tcc-escolar/";
?>
<header>
    <img src="imagens/logo-estudo-expresso-fundo-escuro.png" alt="Estudo & Expresso" class="logo">
    <div class="container-nav">
        <nav>
            <a href="<?php echo $base_url; ?>index.php" target="_self">INICIO</a>
            
            <a href="<?php echo $base_url; ?>quem-somos.php" target="_self">QUEM SOMOS?</a>
            <a href="<?php echo $base_url; ?>meu-aprendizado.php" target="_self">MEU APRENDIZADO</a>
            <div>
                <button class="cadastro deslogar" onclick="logout()">Deslogar</button>
            </div>
        </nav>
        <div class="menu-mobile">
            <button><img src="icons/menu-hamburguer.png" alt="Menu" onclick="menuMobile()" class="icon-menu"></button>
        </div>
    </div>
    <div class="nav-mobile">
        <a href="<?php echo $base_url; ?>/index.php" target="_self">INICIO</a>
        <a href="<?php echo $base_url; ?>/quem-somos.php" target="_self">QUEM SOMOS?</a>
        <a href="<?php echo $base_url; ?>/meu-aprendizado.php" target="_self">MEU APRENDIZADO</a>
        <a href="<?php echo $base_url; ?>/formularios/login.html" class="login-mobile" onclick="logout()" target="_self">Deslogar</a>
    </div>
</header>

