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
                <meta http-equiv='refresh' content='0;url=../index.php'>";
            } else {
                print "<script language='javascript'>alert('Erro ao cadastrar usuário. Tente novamente mais tarde.');</script>
                <meta http-equiv='refresh' content='0;url=../index.php'>";
            }
        }
    break;

    case 'logar';
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Recebe e sanitiza os dados do formulário
            $email = mysqli_real_escape_string($conn, trim($_POST['email']));
            $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));
        
            // Gera o hash MD5 da senha para comparar com o banco de dados
            $senha_hash = md5($senha);
        
            // Consulta para verificar o usuário
            $sql = "SELECT id_user, email FROM usuario WHERE email = '$email' AND senha = '$senha_hash'";
            $result = mysqli_query($conn, $sql);
        
            // Verifica se a consulta retornou resultados
            if ($result && mysqli_num_rows($result) > 0) {
                // Usuário encontrado, extrai os dados do usuário
                $user_data = mysqli_fetch_assoc($result);
                $id_user = $user_data['id_user'];
        
                // Cria um cookie com o ID do usuário, válido por 30 dias
                setcookie("iduser", $id_user, time() + 60 * 60 * 24 * 30, "/");
        
                // Armazena o ID do usuário na sessão
                $_SESSION['idusuario'] = $id_user;
        
                // Feedback para o usuário e redirecionamento
                echo "<script>alert('Login realizado com sucesso!'); window.location.href = '../index.php';</script>";
            } else {
                // Feedback para o caso de login inválido
                echo "<script>alert('Email ou senha incorretos. Tente novamente.'); window.location.href = 'login.html';</script>";
            }
    } else {
        echo "<script>alert('Método de requisição inválido.'); window.location.href = 'login.html';</script>";
    }

    break;
}
    
    
    