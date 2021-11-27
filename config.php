<?php
    $dbHost = 'jdbc:mysql://database-api.ctrq4nldhbgn.sa-east-1.rds.amazonaws.com/FMU';
    $dbUsername = 'admin';
    $dbPassword = 'mendes1212';
    $dbName = 'FMU';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errono){
        echo "Erro";
    }else{
        echo "Conexão efetuada com sucesso";
    }

?>
