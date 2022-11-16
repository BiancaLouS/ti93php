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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes (<?php echo $num_rows ?>)</title>
</head>
<body>
        <table>
            <thead>
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
            </thead>
            <tbody>
                <?php do {?>
                    <tr>
                        <td>
                            <?php echo $row['cod_cliente'];?></td>
                            <?php echo $row['nome'];?></td>
                            <?php echo $row['cpf'];?></td>


                    </tr>
                <?php } while ($row = $lista->fetch())?>
            </tbody>
        </table>
</body>
</html>