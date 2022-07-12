<?php

// $fp = fopen('users.csv', 'r');
// $data = [];
// while ($row = fgets($fp)) {
//     $data[] = explode(',', trim($row));
// }

$dsn = 'mysql:dbname=site;port=3306';

$pdo = new PDO($dsn, 'root', '101010');
$stmt = $pdo->query('select * from users');
$data = $stmt->fetchAll();

var_dump($data);
?>