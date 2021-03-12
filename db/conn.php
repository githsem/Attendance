<?php
    $host = '127.0.0.1';
    $db = 'attendance.db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname:$db;charset=$charset";

    try{
        $pdo = new PDO($dsn,$user,$pass);
        echo 'Hello Database';
    }catch(PDOExceptions $e){
        throw new PDOException($e->getMessage());
    }

?>