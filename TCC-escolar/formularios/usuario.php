<?php
include '../connection.php';



switch (@$_POST["acao"]) {
    case 'cadastrar';
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $email = $_POST['email'];
    $senha = MD5($_POST['senha']);
    $confirme = $_POST['confirme'];
    
    //Verifica se o e-mail já existe no banco de dados
    $sql_verificar = "SELECT * FROM usuario WHERE email = '$email'";
    $res_verificar = $conn->query($sql_verificar);

    if ($res_verificar->num_rows > 0) {
        //Exibe mensagem de alerta se o e-mail já estiver cadastrado
        print "<script language='javascript'>alert('Esse email já foi cadastrado. Verifique as informações e tente novamente.');</script>
        <meta http-equiv='refresh' content='0;url=cadastro.html'>"; 
    } else {
        // Inserir os dados no banco de dados
        $sql = "INSERT INTO usuario (nome_completo, apelido, email, senha) VALUES ('$nome', '$apelido', '$email', '$senha')";
        $res = $conn->query($sql);

        if ($res) {
            print "<script language='javascript'>alert('Usuário cadastrado com sucesso!');</script>
            <meta http-equiv='refresh' content='0;url=../index.html'>";
        } else {
            print "<script language='javascript'>alert('Erro ao cadastrar usuário. Tente novamente mais tarde.');</script>
            <meta http-equiv='refresh' content='0;url=../index.html'>";
        }
    }
    break;

    case 'logar';
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        //Ainda em andamento

        $verifica = "SELECT * FROM usuario WHERE (usuario = '$email' AND senha = MD5('$senha'))";
        $res = $conn->query($verifica);
        $qtd = $res->num_rows;

        if ($qtd > 0) {
            // Define um cookie de login e inicia a sessão
            setcookie("login", $login);
            $_COOKIE['login'];

            session_start();
            $_SESSION['user'] = $login;
            header("Location: ../index.php");
        } else {
            // Exibe uma mensagem de erro se o usuário e/ou senha estiverem incorretos
            print "<script language='javascript'>alert('Usuário e/ou senha incorreta!');</script>
              <meta http-equiv='refresh' content='0;url=login.php'>";
        }
    break;
}
    
    
    