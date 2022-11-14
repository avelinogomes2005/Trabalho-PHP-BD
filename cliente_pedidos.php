<?php

$emailzinho = $_POST['email_login'];

$senha = hash("sha256", $_POST['senha']);
$id = "";

$nome = "";
$handle = fopen("banco.txt", "r");
$status = "";
if ($handle) {
    $line_number = 0;

    while (($line = fgets($handle)) !== false && $status != "OK") {
        $jsonIterator = new RecursiveIteratorIterator(
            new RecursiveArrayIterator(json_decode($line, TRUE)),
            RecursiveIteratorIterator::SELF_FIRST
        );
        $line_number++;
        $em = "";
        $tempID;
        foreach ($jsonIterator as $key => $val) {
            if ($key == "id") {
                $tempID = $val;
            }

            if ($key == "email") {
                $em = $val;
            }   

            if ($key == "nome") {
                $nome = $val;
            }
            if ($key == "senha" && $val == $senha && $em == $emailzinho) {

                $status = "OK";
                $id = $tempID;
                break;
            }
        }
    }

    fclose($handle);
}
if ($status != "OK") {
    echo "<script>alert('Você inseriu os dados errados ou você não existe na tabela');
                    window.location.href = 'cliente_login.php'
    </script>";
}

?>
<div hidden id="idzinho"><?php echo $id;?></div>
<div hidden id="nomi"><?php echo $nome;?></div>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'header.php' ?>
    <title>PEDIDOS DE EMPRÉSTIMO</title>
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


    <div id="pedidos" style="display: none !important; display: flex; flex-direction: row;
    justify-content: center; align-items: center;">

        <article class="servico-login 
    servico-a" style="width: fit-content">

            <header>
                <h1>PEDIR EMPRÉSTIMO</h1>
            </header>
            <div class="row">
                <div class="col">
                    <label>Capital</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            R$
                        </span>
                        <input oninput="mascaraUni('dinheiro')" id="capital-reais" name="capital-reais" type="number" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <label>Intervalo de pagamento</label>
                    <div class="input-group">
                        <input name="tempo-dias" id="tempo-dias" type="number" class="form-control">
                        <span class="input-group-text" id="basic-addon1">
                            DIAS
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Tipo de juros</label>
                    <select id="juros" name="juros" class="form-select" aria-label="Default select example">
                        <option selected>Escolher </option>
                        <option value="c">Composto 5%</option>
                        <option value="s">Simples 9%</option>
                    </select>

                </div>
                <div class="col">
                    <label for="">Você irá pagar no total</label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            R$
                        </span>
                        <input oninput="mascaraUni('dinheiro')" name="total-montante" id="total-montante" type="number" class="form-control" readonly>
                        <button class="btn btn-primary" type="button" onclick="update()">Calcular</button>
                    </div>

                </div>
            </div>
            <div class="row" style="padding-top: 3%; display: flex; justify-content: space-evenly;">
                <button class="btn btn-primary" id="btn-concluir-cadastro-cliente" style="width:fit-content" type="button">Solicitar empréstimo</button>
                <button id="cancelar" class="btn btn-primary" style="width:fit-content" type="button">Cancelar</button>
            </div>


        </article>
    </div>
    <div style="display: flex; flex-direction: row;
    justify-content: center; align-items: center; padding-top: 50px">

        <article class="servico-login 
    servico-a" style="width: fit-content">

            <header>
                <h1>ACOMPANHAR EMPRÉSTIMOS</h1>
            </header>
            <input type="text" name="" id="myInput" class="form-control">
            <table class="table" style="color:white">
                <thead>
                        <td>Montante a pagar</td>
                        <td>Tempo</td>
                        <td>Capital</td>
                        <td>Juros</td>
                </thead>
                <tbody id="myTable">
                    <?php

                    $handle2 = fopen("banco_dividas.txt", "r");

                    $success2 = "";
                    if ($handle2) {
                        $line_number = 0;
                        while (($line = fgets($handle2)) !== false) {
                            $jsonIterator = new RecursiveIteratorIterator(
                                new RecursiveArrayIterator(json_decode($line, TRUE)),
                                RecursiveIteratorIterator::SELF_FIRST
                            );
                            $line_number++;


                            echo "<tr>";
                            foreach ($jsonIterator as $key => $val) {
                                if ($success2 == "OK") {
                                    break;
                                } else {
                                    if ($val == "id") {
                                        echo "<td>$val</td>\n";
                                        $success2 = "OK";
                                    }
                                    if ($key == "montante") {
                                        echo "<td>R&#36;$val</td>";
                                    }
                                    if ($key == "tempo") {
                                        echo "<td>$val dias</td>";
                                    }
                                    if ($key == "capital") {
                                        echo "<td>R&#36;$val</td>";
                                    }
                                    if ($key == "juros") {
                                        if ($val == "s") {
                                            echo "<td>Simples 9%</td>";
                                        } else {
                                            echo "<td>Composto 5%</td>";
                                        }
                                    }
                                }
                            }
                            echo "</tr>";
                        }

                        fclose($handle2);
                    }
                    ?>


            </table>
            </tbody>

            <button class="btn btn-primary" id="solicitar" style="margin-bottom: 5%">Solicitar novo empréstimo</button>
        </article>
    </div>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="cadastro_juros.js"></script>
</body>

</html>
