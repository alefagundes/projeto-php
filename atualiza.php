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

$sql_atualiza = "UPDATE projeto SET nome = '$nome', data_ini = '$data_ini', 
                etapa1 = '$etapa1', etapa2 = '$etapa2', etapa03 = '$etapa03', 
                etapa04 = '$etapa04', etapa05 = '$etapa05', etapa06 = '$etapa06', 
                etapa07 = '$etapa07', etapa08 = '$etapa08' WHERE codigo = $codigo AND usuario_id = $id_user";

$sql_resProject = $mysqli->query($sql_atualiza) or die("Falha na execução do código SQL: " . $mysqli->error);

echo "<p>Projeto Atualizado com sucesso!</p>";
echo "<button><a href='painel.php'>Voltar Painel</a></button>";

?>