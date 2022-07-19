<?php
include('conexao.php');
include('protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Bem vindo ao Painel: <?php echo $_SESSION['nome']; ?>.</h1>

    <p>
        <label>Criar projeto</label>
        <button><a href="./builProject.php">Criar</a></button>
    </p>
    <br/>
    <hr>
    <h3>Projetos do usuario: <?php echo $_SESSION['nome']; ?></h3>

    <table border='1px' width='400px'>
        <tr>
            <th>Codigo</th>
            <th>Nome Project</th>
        </tr>
        <?php
        $user = $_SESSION['id'];


        $sql_busca = "SELECT * FROM projeto WHERE usuario_id = $user";
        $sql_retUser = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);
        
        while($linha = $sql_retUser->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $linha['codigo'];?></td>
                <td><?php echo $linha['nome'];?></td>
            </tr>
            <?php
        }

        ?>
        
    </table>
    <p>
        <form action='./editProject.php' method="post">
        <label>Codigo do projeto para alterar:</label>
        <input type="number" name="codigo" placeholder='Codigo do proejeto'>
        <input type="submit" value="Editar">
        </form>
    </p>
    <hr>
    <br>
    <p>
        <form action="relatorioEspecifico.php" method='POST'>
        <label>Relatorio Expecifico:</label>
        <input type="number" name="codigo" placeholder='Codigo do proejeto' required>
        <button type='submit'>Especifico</button>
        </form>
    </p>
    <p>
        <label>Relatorio Geral:</label>
        <button><a href="gerarRelatorio.php">Geral</a></button>
    </p>
    <hr>
    <p>
        <label>Sair do Sistema:</label>
        <button><a href="logout.php">Sair</a></button>
    </p>
</body>
</html>