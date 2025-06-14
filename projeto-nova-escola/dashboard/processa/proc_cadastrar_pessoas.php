<?php
// importar arquivo de conexão
require("../../adm/conexao.php");

// preparar e executar o BD a inserção do registro
$nome      = $_POST["nome"];
$cpf       = $_POST["cpf"];
$senha     = $_POST["senha"];
$tipo_user = $_POST["tipo_user"];
$data_nasc = $_POST["data_nasc"];

// criptografia
$senha_hash = hash('sha256', $senha);

$sql = "INSERT INTO pessoas (nome, cpf, senha, tipo_user, data_nasc, created, modified, `status`) VALUES 
                            (:nome, :cpf, :senha, :tipo_user, :data_nasc, NOW(), NOW(), 1)";
$comando = $pdo -> prepare($sql);
$comando -> bindParam(":nome", $nome);
$comando -> bindParam(":cpf", $cpf);
$comando -> bindParam(":senha", $senha_hash);
$comando -> bindParam(":tipo_user", $tipo_user);
$comando -> bindParam(":data_nasc", $data_nasc);
$comando -> execute();
?>

<?php
// retornar listagem
header("Location: ../index_dash.php");
?>
