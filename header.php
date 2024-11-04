<?php
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/tcc-escolar/tcc-escolar";
?>
<header>
    <img src="imagens/logo-estudo-expresso-fundo-escuro.png" alt="Estudo & Expresso" class="logo">
    <div class="container-nav">
        <nav>
            <a href="<?php echo $base_url; ?>/index.php">INICIO</a>
            
            <a href="<?php echo $base_url; ?>/quem-somos.php">QUEM SOMOS?</a>
            <a href="<?php echo $base_url; ?>/meu-aprendizado.php">MEU APRENDIZADO</a>
            <div>
                <a href="<?php echo $base_url; ?>/formularios/cadastro.html"class="cadastro">CADASTRO</a>
                <a href="<?php echo $base_url; ?>/formularios/login.html">LOGIN</a>
            </div>
        </nav>
        <div class="menu-mobile">
            <button><img src="icons/menu-hamburguer.png" alt="Menu" onclick="menuMobile()" class="icon-menu"></button>
        </div>
    </div>

    <div class="nav-mobile">
        <a href="<?php echo $base_url; ?>/index.php">INICIO</a>
        <a href="<?php echo $base_url; ?>/quem-somos.php">QUEM SOMOS?</a>
        <a href="<?php echo $base_url; ?>/meu-aprendizado.php">MEU APRENDIZADO</a>
        <a href="<?php echo $base_url; ?>/formularios/cadastro.html" class="cadastro-mobile">CADASTRO</a>
        <a href="<?php echo $base_url; ?>/formularios/login.html" class="login-mobile">LOGIN</a>
    </div>
</header>