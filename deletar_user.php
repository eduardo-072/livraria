<?php
$codigo = $_GET['cod'];

echo "$codigo";

include 'conexao.php';

//Dados para inserir os dados
$delete = "DELETE FROM TB_USER WHERE id_user = $codigo ";

//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $insert);

if ($query) {
    echo "<script>alert('Deletado com sucesso'); history.back();</script>"
}
else {
    echo "<script>alert('Error no script php'); history.back();</script>"
}
?>