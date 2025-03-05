<?php
$host = 'VH306.spaceweb.ru';
$db   = 'aleksey199_quiz';
$user = 'aleksey199_quiz';
$pass = 'xxx';

// $db   = 'room';
// $user = 'root';
// $pass = '123';


$port = "3308";
$charset = 'utf8mb4';
$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new \PDO($dsn, $user, $pass, $options);
?>