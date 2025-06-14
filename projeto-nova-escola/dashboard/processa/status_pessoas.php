<?php
// importar arquivo de conexão
require("../../adm/conexao.php");

// Pegar ID do Usuário
$id = $_GET['id'];
$situacao = $_GET['status'];
$sql = "UPDATE pessoas SET `status` = :situacao WHERE id = :id";
$comando = $pdo -> prepare($sql);
$comando -> bindParam(':id', $id);

if ($situacao) {
    $comando->bindValue(':situacao', 0);
} else {
    $comando->bindValue(':situacao', 1);
}

$comando-> execute();
header("Location:../index_dash.php");

?>