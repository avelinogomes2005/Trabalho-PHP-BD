<?php 
if (!empty($_POST['data'])) {

    $data = $_POST['data'];
    $fname = "banco_dividas.txt";

    $output = null;
    exec("./ler_json.py 2 '" . $data . "'", $output);

    $file = fopen($fname, 'a+');
    fwrite($file, "\n" . $output[0]);
    fclose($file);
}


?>
