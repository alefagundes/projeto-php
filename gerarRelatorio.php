<?php
include('conexao.php');
include('protect.php');

$user = $_SESSION['id'];
$autor = $_SESSION['nome']

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorios</title>
</head>
<body>
    <h2>Relatorio geral</h2>
    <p>Autor: <?php echo $autor; ?></p>

<table border='1px' width='400px'>
        <tr>
            <th>Codigo</th>
            <th>Nome Project</th>
            <th>Data Inicio</th>
            <th>Situacao</th>
        </tr>
        <?php

        $sql_query = "SELECT * FROM projeto WHERE usuario_id = $user";
        $sql_relatorio = $mysqli->query($sql_query) or die("Falha na execução do código SQL: " . $mysqli->error);
        
        while($linha = $sql_relatorio->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $linha['codigo'];?></td>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['data_ini'];?></td>
                <td><?php echo $linha['estatus'];?></td>
            </tr>
            <?php
        }

        ?>
        
    </table>

</body>
</html>