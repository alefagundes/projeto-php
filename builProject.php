<?php
include('conexao.php');
include('protect.php');

/* $codigo = $_POST['codigo'];
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
$estatus = $_POST['status'];
$id_user = $_SESSION['id'];



$sql_code = "INSERT INTO projeto (projeto_id, codigo, nome, data_ini, etapa1, etapa2, etapa03, etapa04, etapa05, etapa06, etapa07, etapa08, data_fim, estatus, usuario_id) VALUES (NULL, '$_POST['codigo']', '$data_ini', '$etapa1', '$etapa2', '$etapa03', '$etapa04', '$etapa05', '$etapa06', '$etapa07', '$etapa08', '$data_fim', '$estatus' '$id_user')";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

echo 'Projeto criado com sucesso! <a href=\'./index.php\'>Login<a/>'; */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar projeto</title>
</head>
<body>
    <h1>Crie seu projeto</h1>
    <form action='' method='POST'>
    <p>
        <label>Codigo do projeto:</label>
        <input type='number' name='codigo' placeholder='Codigo' required>
    </p>
    <p>
        <label>Nome do projeto:</label>
        <input type='text' name='nome' placeholder='Nome' required>
    </p>
    <p>
        <label>Data do projeto:</label>
        <input type='date' name='data_ini' placeholder='Data' required>
    </p>
    <p>
    <label>Etapa 1:</label>
    <select name="etapa1">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>

    <p>
    <label>Etapa 2:</label>
    <select name="etapa2">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 3:</label>
    <select name="etapa03">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 4:</label>
    <select name="etapa04">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 5:</label>
    <select name="etapa05">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 6:</label>
    <select name="etapa06">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 7:</label>
    <select name="etapa07">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 8:</label>
    <select name="etapa08">
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos" selected>Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos" selected>Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao" selected>Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical" selected>Esquema Vertical</option>
    </select>
    </p>
    <p>
        <label>Data final do projeto:</label>
        <input type='date' name='data_fim' placeholder='Data fim'>
    </p>
    <p>
        <label>Estatus do projeto:</label>
        <input type='text' name='status' placeholder='Estatus'>
    </p>
    <p>
        <button type='submit'>SALVAR</button>
    </p>
    </form>

    <p>
        <button><a href="./painel.php">Menu</a></button>
    </p>

</body>
</html>