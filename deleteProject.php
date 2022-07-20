<?php

include('conexao.php');
include('protect.php');

$codigo = $_POST['codigo'];
$id_user = $_SESSION['id'];
//recebo o valor do input do tipo hidden passdo pela tabela listada no painel.
//monto uma query sql e executo a mesma no banco filtrando o pelo numero do usuario da minha sessao 
//e o codigo pertencente ao usuario

$sql_busca = "DELETE FROM projeto WHERE codigo = $codigo AND usuario_id = $id_user";
$sql_exclusao = $mysqli->query($sql_busca) or die("Falha na execução do código SQL: " . $mysqli->error);
//caso der algum ero na execusao da query a funcao die eh disparada e informa o erro.
//casso tudo ocorra bem eh exibido em tela projeto criado com sucesso e disponibilzado um botao de retorno ao menu

echo "<h2>Projeto Excluido com sucesso!</h2>";

echo "<button><a href='painel.php'>Voltar ao Painel</a></button>";

?>
