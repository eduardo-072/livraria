<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $select = "SELECT * from tb_user";
    $query = mysqli_query($conexao,$select);
    while ($result = mysqli_fetch_array($query)) {;
    ?>
      <tr>
        <th scope="row"> <?php echo $result['id_user']; ?> </th>
        <td> <?php echo $result['nm_usuario']; ?> </td>
        <td> <?php echo $result['nm_setor']; ?> </td>
        <td> <?php echo $result['login']; ?> </td>
        <td>
          <a href="edit_user.php?cod=<?php echo $result['id_user']; ?>"><i class="icon fa-solid fa-user-pen"></i></a>
          <a href=""><i class="icon2 fa-solid fa-solid fa-trash"></i></a>
        </td> 
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><tbody>
    <?php
    $select = "SELECT * from tb_user";
    $query = mysqli_query($conexao,$select);
    while ($result = mysqli_fetch_array($query)) {;
    ?>
      <tr>
        <th scope="row"> <?php echo $result['id_user']; ?> </th>
        <td> <?php echo $result['nm_usuario']; ?> </td>
        <td> <?php echo $result['nm_setor']; ?> </td>
        <td> <?php echo $result['login']; ?> </td>
      </tr>
  <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>