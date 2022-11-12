<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php' ?>
    <title>Cliente</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family:Arial, Helvetica, sans-serif; font-size: 2em; color: white;font-weight: 600;">BEM VINDO(A) CLIENTE</a>
                </li>
            </ul>

            <div class="d-flex">

                <a href="index.php"><button class="btn btn-success" type="submit" style="color: white; border-color: white;">VOLTAR AO INÍCIO</button></a>

            </div>


        </div>

        </div>
    </nav>

    <div style="width: 100%; display: flex; justify-content: center; align-items: center">

        <article class="servico-login">
            <div class="container" style="width: 95%">


                <div class="row">
                    <div class="col-sm-2">
                        <label>FOTO</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="col-sm-5">
                        <label>NOME</label>
                        <input id="nome" type="text" class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <label>TELEFONE</label>
                        <input id="tel" oninput="mascaraUni('tel')" maxlength="11" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5">
                        <label>CPF</label>
                        <input id="cpf" oninput="mascaraUni('cpf')" maxlength="11" type="text" class="form-control">
                    </div>
                    <div class="col-sm-5">
                        <label>ENDEREÇO</label>
                        <input id="endereco" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>EMAIL</label>
                        <input id="email" type="email" class="form-control">
                    </div>
                    <div class="col-sm-6">
                        <label>SENHA</label>
                        <input id="senha" type="password" class="form-control">
                    </div>

                    
                </div>

                <div style="width: 100%; display: flex; justify-content: space-between;margin-top:2em">
                    <button class="btn btn-success" id="btn-concluir-cadastro-cliente">Concluir Cadastro</button>

                    <button class="btn btn-success" onclick="cancelarCadastro()">Cancelar</button>

                    <a href="index.php"><button class="btn btn-success">Sair</button></a>

                </div>
            </div>

        </article>

    </div>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <script src="banco_de_dados.js"></script>
</body>

</html>
