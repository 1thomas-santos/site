<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location:index.php?msg=nao_autorizado');
    exit();
} 
function is_logged() {
    return isset($_SESSION['user_id']);
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mtmp</title>

</head>
<body>
<h1>
        Anúncios
    </h1>
    <?php if(is_logged()):?> 
<?php
$user_id = $_SESSION['user_id'];

$dsn = 'mysql:dbname=site;port=3306';
$pdo = new PDO($dsn, 'root','101010');
$stmt = $pdo->query("
    select * from anuncios 
    where user_id != $user_id
    order by ano , titulo
");
$data = $stmt->fetchAll();
?> 
<table>
        <?php foreach ($data as $row): ?>
            <tr>
                <td><?= $row['titulo'] ?></td>
                <td><?= $row['ano'] ?></td>
                <td><?= $row['descricao'] ?></td>

                </td></tr>
        <?php endforeach ?>
    </table>
   
<!--
    <a href="logout.php">sair</a>
    <a href="livros/index.php">Ver meus Anúncios </a>
     -->

    <?php endif ?>

    <head>
    <meta charset="UTF-14">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
        margin: 0 auto;
        padding: 0;
        box-sizing: bordor-box;
        font-family: Arial, Helvetica, sans-serif;
    }
    
    #menu-h {
        text-align: center;
        list-style: none;
        padding: 0;
        background-color: rgb(69, 126, 213);
    }
    
    #menu-h li{
        display: inline;
    
    }
    
    #menu-h li a{
        color:  #fff;
        padding: 25px;
        display: inline-block;
        text-decoration: none;
        
    }
    #menu-h li a:hover {
        background-color: rgb(195, 23, 23);
        
        
    }
    #menu-h li:last-child a{
        float: right;
        background-color: rgb(222, 19, 19);
    }
    
        
        
    
    </style> 


</head>
<body>
    <ul id="menu-h">
        

        <li><a href="https://google.com">Home</a></li>

        <li><a href="https://youtube.com">Usuario</a></li>

        <li><a href="#">Meus Anuncios</a></li>

        <li><a href="#">Configurações</a></li>

        <li><a href="#">Ajuda</a></li>

        <li><a href="#">Duvidas</a></li>

        <li><a href="./logout.php">Sairrr</a></li>

        <li><a href="#">Entrar</a></li>

    


    </ul>
    </header>




</body>
</html>