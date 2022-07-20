<?php

include('conexao.php');
include('protect.php');

$codigo = $_POST['codigo'];
$id_user = $_SESSION['id'];

$sql_busca = "DELETE FROM projeto WHERE codigo = $codigo AND usuario_id = $id_user";
$sql_exclusao = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);

echo "<h2>Projeto Excluido com sucesso!</h2>";

echo "<button><a href='painel.php'>Voltar ao Painel</a></button>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao de Projeto</title>
</head>
<body>

    
</body>
</html>