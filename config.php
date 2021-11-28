<?php
    $dbHost = "database.ctrq4nldhbgn.sa-east-1.rds.amazonaws.com";
    $dbUsername = "admin";
    $dbPassword = "mendes1212";
    $dbname = "fmu";

    $pdo = new PDO("mysql:host={$dbHost};port=3306;dbname={$dbname};user={$dbUsername};password={$dbPassword}");

?>
