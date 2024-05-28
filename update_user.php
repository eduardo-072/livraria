<?php
//recebendo dados do formulário

$codigo = $_POST['id']
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//inserir dados no banco
include 'conexao.php';

$update = "UPDATE tb_user SET 
nm_user = '$nome';
setor = '$nm_setor;
login = '$login'
where = id_user = $codigo 
";

//inserindo os dos no banco de dados utilando a função mysqli
$query = mysqli_query($conexao, $insert);

echo 'inserido com sucesso'
?>