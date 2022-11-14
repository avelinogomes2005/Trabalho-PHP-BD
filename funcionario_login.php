<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once 'header.php'; ?>
  <title>Login do Funcionário</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
        <li class="nav-item">
          <a class="nav-link" href="#" style="font-size: 2em; font-weight:600; color: white;">BEM VINDO(A) FUNCIONÁRIO(A)</a>
        </li>
      </ul>

      <div class="d-flex">

        <a href="index.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO INÍCIO</button></a>

      </div>


    </div>

  </nav>

  <article class="tela-principal" style="display:flex; align-items:center; width:30vw; text-align: center;">
  <div class="">
  <header>
      <h1>Tela de login</h1>
    </header>
        <div class="container logiin">
          <div class="row">
            <div class="col">

              <label>Email</label>
              <input type="email" class="form-control" id="email">


              <label>Senha</label>
              <input type="password" class="form-control" id="senha">
            </div>
          </div>
          <div class="row" style="margin-top: 4%">
            <div class="col">
              <button type="button" style="background-color: purple; border-color: white" class="btn btn-primary" onclick="entrar()">Entrar</button>
            </div>

          </div>
        </div>


  </div>
    

  </article>

  <script src="script_login.js"></script>
</body>

</html>
