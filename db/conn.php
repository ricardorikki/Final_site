<?php
  // Development Connection
   /*  $host = '127.0.0.1';
    $db = 'ricradodb';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4'; */

    //Remote Database Connection
    $host = 'remotemysql.com';
    $db = 'fd0df34k0c';
    $user = 'fd0df34k0c';
    $pass = '2kTZ9RBDOh';
    $charset = 'utf8mb4';  

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        //echo "Hello Database";
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("admin","password");


?>