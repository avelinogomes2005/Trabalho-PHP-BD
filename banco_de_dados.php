<?php


# cadastro do cliente
if (!empty($_POST['data'])) {

    $data = $_POST['data'];
    $fname = "banco.txt";

    $output = null;

    $jsond = json_decode($data, true);

    $mydate = json_encode(getdate());
    $nome = $jsond["nome"];
    $cpf = $jsond["cpf"];
    $endereco = $jsond["endereco"];
    $tel = $jsond["tel"];
    $email = $jsond["email"];
    $senha = hash("sha256", $jsond["senha"]);
    $id = hash("md5", $mydate);

    $dados = Array(
        "id" => $id,
        "nome" => $nome,
        "cpf" => $cpf,
        "endereco" => $endereco,
        "tel" => $tel,
        "email" => $email,
        "senha" => $senha
    );

    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . json_encode($dados));
    fclose($file);
}

function ler_e_imprimir_banco(){
    $handle = fopen("banco_dividas.txt", "r");

    if ($handle) {
        $line_number = 0;
        while (($line = fgets($handle)) !== false) {
            $jsonIterator = new RecursiveIteratorIterator(
                new RecursiveArrayIterator(json_decode($line, TRUE)),
                RecursiveIteratorIterator::SELF_FIRST);
            $line_number++;

        
            echo "<tr id='line-$line_number'>";
            foreach ($jsonIterator as $key => $val) {
                if ($key == "id") {
                    continue;
                }
                else if ($key == "montante") {
                    echo "<td>R&#36;$val</td>";
                }
                else if ($key == "tempo") {
                    echo "<td>$val dias</td>";
                }
                else if ($key == "juros") {
                    if ($val == "s") {
                        echo "<td>Simples 9%</td>";
                    } else {
                        echo "<td>Composto 5%</td>";
                    }
                }
                elseif ($key == "capital") {
                    continue;
                }
                else{
                    echo "<td>$val</td>";
                }

            }
            echo '<td><input type="checkbox" name="" id=""></td>';
            echo "</tr>";
        }

        fclose($handle);
    }
}
?>
