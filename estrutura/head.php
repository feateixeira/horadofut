<?php session_start();

function d($v){
    echo "<pre>";
    var_dump($v);
    echo "</pre>";
    exit();
}

function dateSwap(string $data): string {
    $data = explode(" ", $data)[0];
    if (preg_match_all('/^(\d{2})\/(\d{2})\/(\d{4})$/', $data)) { //Formato ptbr
        return implode('-', array_reverse(explode('/', $data)));
    } else if (preg_match_all('/^(\d{4})\-(\d{2})\-(\d{2})$/', $data)) { //Formato sql
        return implode('/', array_reverse(explode('-', $data)));
    } else {
        die('<code>Formato de data inv�lido para a fun��o dateSwap!</code>');
    }
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="assets/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Hora do Fut</title>
</head>