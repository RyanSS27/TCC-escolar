<!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="styles/style.css">
            <link rel="stylesheet" href="styles/meu-aprendizado.css">
            <link rel="stylesheet" href="styles/mediaquerys/meu-aprendizado-mediaquery.css">
            <link rel="stylesheet" href="styles/mediaquerys/footer-rodape-mediaquery.css">
            <title>Meu aprendizado</title>
        </head>
        <body>
            <?php
                session_start(); // Inicia a sessão para verificar se o usuário está logado
                include 'connection.php';

                if (isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) {
                    // Usuário logado - inclui o header para usuários cadastrados
                    include('header-usuario.php');
                    include('paginas-usuario/meu-aprendizado-usuario.php');
                } else {
                    // Usuário não logado - inclui o header para usuários não cadastrados
                    include('header.php');
                    include('paginas-usuario/meu-aprendizado-amostra.php');
                }
            ?>


            <?php
                include('footer-escuro.php');
            ?>

        <script src="scripts/testaessamerda.js"></script>
    </body>
</html>    