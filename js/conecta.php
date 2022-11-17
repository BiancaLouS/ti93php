<?php
    include 'config.php';

    try{
        $conn = new PDO ("mysql:dbname=".DATABASE.";port=".PORT_DB.";host=".SERVER_DB,USER_DB,PASSWORD_DB);
    } catch (Exception $e){
        echo "Falha ao conectar ao banco <strong>".DATABASE.".</strong>Verifique! <br>".$e;
    }
?>