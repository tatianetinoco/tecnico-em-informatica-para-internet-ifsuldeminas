<?php
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$data = $_ENV['DB_NAME'];

try {
  $pdo = new PDO("mysql:host=$host; dbname=$data", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}

?>
