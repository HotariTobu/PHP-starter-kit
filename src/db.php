<?php

$dsn = 'mysql:host=mysql;dbname=db-name';
$user = 'user-name';
$password = 'password';
$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

$statement = $pdo->query('SHOW DATABASES');
foreach ($statement->fetchAll() as $record) {
    echo $record[0] . '<br>';
}
