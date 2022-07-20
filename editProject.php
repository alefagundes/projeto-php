<?php
include('conexao.php');
include('protect.php');

$codigo = $_POST['codigo'];
$user = $_SESSION['id'];

$sql_busca = "SELECT * FROM projeto WHERE codigo = $codigo AND usuario_id = $user";
$sql_resProject = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);

if($sql_resProject->num_rows == 0) {
    echo "<h2>Voce nao possui projetos com o codigo: $codigo cadastrado</h2>";
}

$teste = $sql_resProject->fetch_assoc();


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
    <h1>Editando o projeto: <?php echo $teste['nome'];?></h1>
    <form action='atualiza.php' method='POST'>
    <p>
        <label>Codigo do projeto:</label>
        <input type='number' value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['codigo'];} ?>' name='codigo'placeholder='Codigo do projeto' required>
    </p>
    <p>
        <label>Nome do projeto:</label>
        <input type='text' value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['nome'];} ?>' name='nome' placeholder='Nome' required>
    </p>
    <p>
        <label>Data do projeto:</label>
        <input type='date' name='data_ini' value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['data_ini'];} ?>' placeholder='Data' required>
    </p>
    <p>
    <label>Etapa 1:</label>
    <select name="etapa1">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa1'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa1'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>

    <p>
    <label>Etapa 2:</label>
    <select name="etapa2">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa2'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa2'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 3:</label>
    <select name="etapa03">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa03'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa03'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 4:</label>
    <select name="etapa04">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa04'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa04'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 5:</label>
    <select name="etapa05">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa05'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa05'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 6:</label>
    <select name="etapa06">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa06'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa06'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 7:</label>
    <select name="etapa07">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa07'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa07'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
    <label>Etapa 8:</label>
    <select name="etapa08">
        <option value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa08'];} ?>' selected><?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['etapa08'];} ?></option>
        <option value=''></option>
        <option value='Padronizacao Planta Baixa'>Padronização Planta Baixa</option>
        <option value="Atribuicao de pontos">Atribuição de pontos</option>
        <option value="Tabulacao">Tabulação</option>
        <option value="Ajuste de circuitos">Ajuste de circuitos</option>
        <option value="Quadro de carga">Quadro de carga</option>
        <option value="Flacao">Flação</option>
        <option value="Revisao parcial">Revisao parcial</option>
        <option value="Esquema Vertical">Esquema Vertical</option>
    </select>
    </p>
    <p>
        <label>Data final do projeto:</label>
        <input type='date' value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['data_fim'];} ?>' name='data_fim' placeholder='Data fim'>
    </p>
    <p>
        <label>Status do projeto:</label>
        <input type='text' value='<?php if($sql_resProject->num_rows == 0){echo "";}else {echo $teste['estatus'];} ?>' name='estatus' placeholder='Status'>
    </p>
        <input type="submit" value="SALVAR">
    </form>
    <p>
        <button><a href="./painel.php">Voltar ao Painel</a></button>
    </p>
</body>
</html>