<?php
    session_start(); //Inicia a sessão
    session_unset(); //Remove todas as variáveis de sessão
    session_destroy(); // Destroi a sessão
    setcookie("iduser", "", time() - 3600, "/"); //Remove o cookie do ID do usuário, se configurado

    //Redireciona para a página inicial após o logout
    echo "<script>alert('Usuário deslogado.'); window.location.href = '../index.php';</script>";
    exit();
?>