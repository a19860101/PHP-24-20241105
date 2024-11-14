<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-24-20241105';
    $db_charset = 'utf8mb4';

    // data source name
    $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $dsn = "mysql:host=localhost;dbname=php-24-20241105;charset=utf8mb4";

    // $pdo = new PDO($dsn,$db_user,$db_pw);

    try {
        $pdo = new PDO($dsn,$db_user,$db_pw);
    }catch(PDOException $e){
        // print_r($e);
        echo $e->getMessage();
    }
