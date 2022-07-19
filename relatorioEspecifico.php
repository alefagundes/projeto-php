<?php
include('protect.php');
include('conexao.php');

$user = $_SESSION['id'];
$codigo = $_POST['codigo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio Especifico</title>
</head>
<body>

<h1>Relatorio especifico do projeto de codigo n: <?php echo $codigo; ?></h1>

<table border='1px' width='700px'>
        <tr>
            <th>Nome</th>
            <th>Etapas</th>
            <th>Data Inicio</th>
            <th>Situacao</th>
            <th>Entrega</th>
        </tr>
        <?php

        $sql_query = "SELECT * FROM projeto WHERE codigo = $codigo AND usuario_id = $user";
        $sql_relEspe = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);
        
        while($linha = $sql_relEspe->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa1'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa2'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa03'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa04'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa05'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa06'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa07'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['etapa08'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
                <td><?php echo $linha['data_fim'];?></td>
            </tr>
            <?php
        }

        ?>
        
    </table>
    <hr>
    <button><a href="painel.php">VOLTAR</a></button>
</body>
</html>