<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <!--Link CSS do BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!--Link CSS do Meu CSS-->
    <link rel="stylesheet" href="C_cliente.css">
      <!--Link CSS do Font Awesome para Icones-->
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
  </head>
<body>
<?php 
  session_start();
  if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
     }
?> 
  <nav>
    <div class="menu-icon" id="menuIcon">
      <i class="fas fa-bars"></i> <!-- Ícone de hambúrguer do Font Awesome -->
  </div> 
  <div class="side-menu" id="sideMenu">
    
      <a href="C_cliente.html">
        <i class="fa-solid fa-user"></i>
        <span class="iten-ds">
          Cadastrar Cliente
        </span>
      </a>

      <a href="listar_cliente.php">
        <i class="fa-solid fa-file"></i>
        <span class="iten-ds">
          Relatorio Cliente
        </span>
      </a>

      <a href="C_editora.html">
        <i class="fa-solid fa-book"></i>
        <span class="iten-ds">
          Cadastrar Editora
        </span>
      </a>

      <a href="listar_editora.php">
        <i class="fa-regular fa-note-sticky"></i>
        <span class="iten-ds">
          Relatorio Editoras
        </span>
      </a>

      <a href="listar_user.php">
        <i class="fa-solid fa-copy"></i>
        <span class="iten-ds">
          Relatorio Usuários
        </span>
      </a>

      <div style="color: white;">
      </div>
     
    </div> 
  </nav>    
  <div class="container text-center">
    <div class="row">
        <div class="col"></div><br>
        <div></div><br>
        <div></div><br>
        <div></div><br>
        <div></div><br>
        <div></div><br>
        
       
      <div class="cx-1">
        <h1><strong>Cadastre-se</strong></h1>
        
        <form class="cx" action="insert_cliente.php" method="post">
          <div class="mb-3" id="barra-1">
            <label for="exampleInputEmail1" class="form-label"><strong>Nome do Cliente</strong></label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome do Cliente" name="nm_cliente" aria-describedby="emailHelp">
          </div>
            <div class="mb-3" id="barra-2">
              <label for="exampleInputEmail1" class="form-label"><strong>Endereço</strong></label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço do cliente" name="nm_endereco" aria-describedby="emailHelp">
            </div>
            <div class="mb-3" id="barra-3">
              <label for="exampleInputEmail1" class="form-label"><Strong>Número</Strong></label>
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o Número" name="nr_endereco" aria-describedby="emailHelp">
            </div>
              <div class="mb-3" id="barra-4">
                <label for="exampleInputEmail1" class="form-label"><strong>CPF</strong></label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CPF do cliente" name="nr_cpf" aria-describedby="emailHelp">
              </div>
              <div class="mb-3" id="barra-5">
                <label for="exampleInputEmail1" class="form-label"><strong>CNJP</strong></label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o CNPJ" name="nr_cnpj" aria-describedby="emailHelp">
              </div>
              <div class="mb-3" id="barra-6">
                <label for="exampleInputEmail1" class="form-label"><strong>Telefone</strong></label> 
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite seu Telefone" name="nr_telefone" aria-describedby="emailHelp">
              </div>  
              <div class="btn-cadastro"><br>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>                              
        </form>
         <div class="cx-2">
          <p>Welcom to the Jungle</p>
        </div>
      </div> 
      
      </div> 
    </div>
  </div>
<div class="col">
      </div>
  </div>
  <script src="main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>
