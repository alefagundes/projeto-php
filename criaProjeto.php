<?php
include('conexao.php');
include('protect.php');

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
    <form action='insertProject.php' method='POST'>
    <p>
        <label>Codigo do projeto:</label>
        <input type='number' value='' name='codigo'placeholder='Codigo do projeto' required>
    </p>
    <p>
        <label>Nome do projeto:</label>
        <input type='text' value='' name='nome' placeholder='Nome' required>
    </p>
    <p>
        <label>Data do projeto:</label>
        <input type='date' name='data_ini' value='' placeholder='Data' required>
    </p>
    <p>
    <label>Etapa 1:</label>
    <select name="etapa1">
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
        <input type='date' value='' name='data_fim' placeholder='Data fim'>
    </p>
    <p>
        <label>Status do projeto:</label>
        <input type='text' value='' name='estatus' placeholder='Status'>
    </p>
        <input type="submit" value="SALVAR">
    </form>
    <p>
        <button><a href="./painel.php">Menu</a></button>
    </p>
</body>
</html>