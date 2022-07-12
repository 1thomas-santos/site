<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

 
    $dsn = 'mysql:dbname=site;port=3306';
    $pdo = new PDO($dsn, 'root', '101010');
    $stmt = $pdo->query('select * from users');
    $data = $stmt->fetchAll();


    foreach($data as $row) {
        if ($row['email'] == $email && $row['senha'] == $senha) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['nome'];
            $_SESSION['user_id'] = $row['id'];

            header('location: home.php');
            exit();
        }
    }
    //header('location: index.php?msg=usuario_ou_senha_invalido')
?>