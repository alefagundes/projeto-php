<?php
include('conexao.php');

if(isset($_POST['nome'])  || isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        echo "Preencha seu nome";
    }else if(strlen($_POST['email']) == 0) {
            echo "Preencha sua email";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
    

        $sql_busca = "SELECT * FROM usuario WHERE email = '$email'";
        $sql_retUser = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade_user = $sql_retUser->num_rows;

        if($quantidade_user > 0){
            echo '<p>Erro: Usuario ja cadastrado no sistema! <a href="./index.php">Entrar</a></p>';

        }else{

            $sql_code = "INSERT INTO usuario (id, nome, email, senha) VALUES (NULL, '$nome', '$email', '$senha')";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            echo 'Usuario criado com sucesso! <a href=\'./index.php\'>Login<a/>';
        }

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <form action="" method='POST'>
    <h1>Cadastre-se</h1>
    <p>
        <label>Nome:</label>
        <input type="text" name="nome" placeholder='Informe seu nome'>
    </p>
    <p>
        <label>E-mail:</label>
        <input type="text" name="email" placeholder='Informe seu email'>
    </p>
    <p>
        <label>Password:</label>
        <input type="password" name="senha" placeholder='Informe sua senha'>
    </p>
    <button type='submit'>Cadastrar</button>
    </form>
</body>
</html>