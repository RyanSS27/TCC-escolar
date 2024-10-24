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
        //Recebe os dados do formulário
        $login =  mysqli_real_escape_string($conn, trim($_POST['email']));
        $senha =  mysqli_real_escape_string($conn, trim($_POST['senha']));

        //Verifica se o usuário está cadastrado e se o email bate com a senha
        $sql = "SELECT id_user, email FROM usuario WHERE (email = '$login' AND senha = md5('$senha'))";

        $r = @mysqli_query($conn, $sql);

        $result = mysqli_fetch_array($r);		 
        $id_user = $result['id_user'];  
        	
            

        $num = mysqli_num_rows($r);	



        if ($num > 0){
                $sql = "SELECT email FROM usuarios WHERE email = '$login' ";
                $r = @mysqli_query($conn, $sql);
        } else{
            $user_name = $login;			 
        }
            

                // criar um cookie que vai nos dizer que o usuário está logado

                //o usuario vai ficar logado por um mes		

                setcookie("iduser",$id_user, time()+60*60*24*30);


                session_start();

                $_SESSION['idusuario']	 = $id_user;

                print "<script language='javascript'>alert('Usuário logado.');";
    break;
}
    
    
    