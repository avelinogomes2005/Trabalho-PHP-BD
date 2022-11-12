<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php' ?>
    <title>Tela de Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 2em; font-weight: bolder; color: white">BEM VINDO(A) CLIENTE</a>
                </li>
            </ul>

            <div class="d-flex">

                <a href="index.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO INÍCIO</button></a>

            </div>


        </div>

    </nav>
    <div style="display: flex; flex-direction: row;
    justify-content: center; align-items: center;">
    <article class="servico-login 
    servico-a" style="width: fit-content">

        <header>
            <h1>Tela de login</h1>
        </header>
        

        <form action="cliente_pedidos.php" method="post">
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="email" class="form-control" id="email" name="email_login">


                    <label>Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
            </div>
            <div class="row" style="padding-top: 3%; display: flex; justify-content: center;">
                    <button class="btn btn-primary" style="width:fit-content" type="submit" id="entrar-btn">Entrar</button>

            </div>
            

            <div class="row">
                <div class="col">
                    <div class=""> Ainda não está cadastrado? <a href="cliente.php">Clique aqui!</a></div>
                </div>
                
            </div>
            <form>



    </article>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="loginzinho.js"></script>
</body>

</html>
