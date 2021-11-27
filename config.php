<?php
    $dbHost = "database.ctrq4nldhbgn.sa-east-1.rds.amazonaws.com";
    $dbUsername = "admin";
    $dbPassword = "mendes1212";
    $dbname = "fmu";

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbname);

    if($conexao->connect_errno){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }

?>
