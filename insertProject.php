<?php

include('conexao.php');
include('protect.php');

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$data_ini = $_POST['data_ini'];
$etapa1 = $_POST['etapa1'];
$etapa2 = $_POST['etapa2'];
$etapa03 = $_POST['etapa03'];
$etapa04 = $_POST['etapa04'];
$etapa05 = $_POST['etapa05'];
$etapa06 = $_POST['etapa06'];
$etapa07 = $_POST['etapa07'];
$etapa08 = $_POST['etapa08'];
$data_fim = $_POST['data_fim'];
$estatus = $_POST['estatus'];
$id_user = $_SESSION['id'];

$sql_busca = "INSERT INTO projeto (projeto_id, codigo, nome, data_ini, etapa1, etapa2, etapa03, 
            etapa04, etapa05, etapa06, etapa07, etapa08, estatus, data_fim, usuario_id) 
            VALUES (NULL, '$codigo', '$nome', '$data_ini', '$etapa1', '$etapa2', 
            '$etapa03', '$etapa04', '$etapa05', '$etapa06', '$etapa07', 
            '$etapa08', '$estatus', '$data_fim', $id_user)";

$sql_insert = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);

echo "<h3>Projeto criado com sucesso!</h3>";
echo "<button><a href='./painel.php'>Voltar ao Painel<a/></button>";

?>