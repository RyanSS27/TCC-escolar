<?php
include '../connection.php';



switch (@$_POST["acao"]) {
    case 'cadastrar';
        $nome = $_POST['nome'];
        $apelido = $_POST['apelido'];
        $email = $_POST['email'];
        $senha = MD5($_POST['senha']);
        $confirme = $_POST['confirme'];
        if ('SELECT email FROM usuario' == $email) {
            print "<script language='javascript'>alert('Esse email já foi cadastrado. Altere e tente novamente');";
        } else {
            $sql = "INSERT INTO usuario (nome_completo, apelido, email, senha) VALUES   ('$nome', '$apelido', '$email', '$senha')";
            $res = $conn->query($sql);
            print "<script language='javascript'>alert('Usuário cadastrado');</script>
            <meta http-equiv='refresh' content='0;url=../index.html'>"; 
        }
                   
    break;

    case 'logar';
        
    break;
}

