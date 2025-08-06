<?php
$host = 'hecsolutions.mysql.dbaas.com.br';
$dbname = 'hecsolutions';
$username = 'hecsolutions';
$password = 'Hec@devFneres5';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>