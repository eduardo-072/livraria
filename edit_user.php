<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">
 
<body>
    <?php 
    include 'conexao.php';
    $codigo = $_GET{'cod'};
    $select = "SELECT * FROM tb_user where id_user = $codigo";
    $query = mysqli_query($conexao, $select);
    $result = mysqli_fetch_array($query);   
    ?>

<div class="caixa" class="container-form text-center">
  <div class="flex">
      <form  action="insert_user.php" method="post">
        <h1 class="titulo">Cadastro</h1>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><strong>Nome</strong></label>
              <input type="text" value="<?php echo $result['name="nome']; ?>" class="form-control" id="exampleImputEmail1" name="nome">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><strong>Setor</strong></label>
              <input type="text" value="<?php echo $result['name="setor']; ?>" class="form-control" id="exampleImputEmail1" name="setor">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"><strong>Login</strong></label>
              <input type="text" value="<?php echo $result['name="login']; ?>" class="form-control" id="exampleImputEmail1" name="login">
          </div>
          <div class="botao">
              <button type="submit" class="botão-de-cadastro"><strong>Cadastrar</strong></button>
              <a class="botão" href="index.html" role="button">Fazer Login</a>
          </div>
      </form>
  </div>
</div>
</div> 
</body>
 
</html>