<?php include_once 'banco_de_dados.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php'; ?>
    <title>Tela do Funcionário</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="navbar-brand" href="#"><img src="imagens/LOGO.png" style="width:auto; height:3em;"></a>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family:Arial, Helvetica, sans-serif; font-size: 2em; color: white;font-weight: 600;">BEM VINDO(A) FUNCIONÁRIO(A)</a>
                </li>
            </ul>

            <div class="d-flex">

                <a href="funcionario_login.php"><button class="btn btn-outline-success" type="submit">VOLTAR AO INÍCIO</button></a>

            </div>


        </div>

    </nav>
    <article style="margin-top: 2em;">
        

        <div class="container" style="margin-bottom: 1em; display:flex;
        flex-direction: column; justify-content: center; align-items: center">
            <header>
                <h1>LISTA DE <del>vítimas</del> CLIENTES</h1>
            </header>
            <div class="col-sm-4">
                <input type="text" name="" id="myInput" class="form-control"
                placeholder="Pesquisar">
            </div>

        </div>

        <table class="table row-clickable table-hover" 
        style="overflow: hidden;">
            <thead>
                <td>NOME</td>
                <td>MONTANTE</td>
                <td>TEMPO A PAGAR</td>
                <td>JUROS</td>
                <td>Selecionar</td>
            </thead>
            <tbody id="myTable">
                <tr>
                    <td>João</td>
                    <td>100</td>
                    <td>10</td>
                    <td>1% (composto)</td>
                    </td>
                </tr>

                <tr>
                    <td>Lucas</td>
                    <td>14000</td>
                    <td>10</td>
                    <td>15% (composto)</td>
                    </td>
                </tr>

                <tr>
                    <td>Jar jar binks</td>
                    <td>1050</td>
                    <td>10</td>
                    <td>10% (composto)</td>
                    </td>
                </tr>

                <tr>
                    <td>Irineu</td>
                    <td>2000</td>
                    <td>10</td>
                    <td>10% (composto)</td>
                    </td>
                </tr>

                <tr>
                    <td>Japonês da federal</td>
                    <td>3000</td>
                    <td>10</td>
                    <td>9% (composto)</td>
                    </td>
                </tr>

                <?php ler_e_imprimir_banco();?>

            </tbody>
        </table>
        
    </article>

    <script>
        
    </script>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
