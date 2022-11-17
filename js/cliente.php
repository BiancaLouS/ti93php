<?php
    include 'conecta.php';
    // criando consulta SQL
    $consultaSql = "SELECT * FROM cliente";

    // buscando e listando os dados da tabela (completa)
    $lista = $conn->query($consultaSql);

    // separar em linhas
    $row = $lista->fetch();

    // retornando o número de linhas
    $num_rows = $lista->rowCount();

    if(isset($_POST['bt-enviar']))
    {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $insertSql = "insert cliente (nome, cpf) values('$nome','$cpf')";
        $resultado = $conn->query($insertSql);
        header('location: cliente.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes(<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href ="css/style.css">
</head>

<body>
    <form action="#" method="post">
        <div hidden>
            <label for="cod">Código
                <input type="text" name="cod" id=""></label>
        </div>
        <div class="campo">
            <label for="nome">Nome
                <input type="text" name="nome" id=""></label>
        </div>
        <div class="campo">
            <label for="cpf">CPF
                <input type="number" name="cpf" id=""></label>
        </div>
        <div>
            <button type="submit" name="bt-enviar">Enviar</button>
        </div>
        <div class="campo">
            <label for="cpf">Turno
                <select name="turno" id="">
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>
            </label>
        </div>
    </form>   
    <table class="tabela">
            <thead>
                <th>Cod</th>
                <th>Nome</th>
                <th>CPF</th>
            </thead>
            <tbody>
                <?php do {?>
                    <tr>
                        <td><?php echo $row['cod_cliente'];?></td>
                        <td><?php echo $row['nome'];?></td>
                        <td><?php echo $row['cpf'];?></td>
                    </tr>
                <?php } while ($row = $lista->fetch())?>
            </tbody>
        </table>
</body>
</html>