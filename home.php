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

        <li><a href="./logout.php">Sair</a></li>

        <li><a href="#">Entrar</a></li>

    


    </ul>



    <html lang="en">

    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>E-commerce Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/59feaf50a6.js" crossorigin="anonymous"></script>
   
    </head>

<body>
    
            <div class="col-4">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYUX5y6xLq-iZV6w1XbcY1SJRUc_J_9PlHpDuBrE52GQatbPnQa5AiWK4GUYT3X63cnxSd978XUg&usqp=CAc" alt="" />
                <li><a href="descricao.php">Black and Grey tshirt</a></li>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.12990</p>
            </div>



</body>
    </header>





</body>
</html>
