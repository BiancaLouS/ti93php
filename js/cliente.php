<?php
    include 'conecta.php';
    // criando consulta SQL
    $consultaSql = "SELECT * FROM cliente";

    // buscando e listando os dados da tabela (completa)
    $lista = $conn->query($consultaSql);

    // separar em linhas
    $row = $lista->fetch();
    print_r($row);

    // retornando o número de linhas
    $num_rows = $lista->rowCount();

    print_r($row);
?>