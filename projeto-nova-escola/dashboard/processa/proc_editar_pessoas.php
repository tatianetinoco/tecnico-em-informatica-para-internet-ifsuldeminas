<?php
// importar arquivo de conexão
require("../../adm/conexao.php");

// preparar e executar o BD a edição do registro
$id      = $_POST["id"];
$nome      = $_POST["nome"];
$cpf       = $_POST["cpf"];
$senha     = $_POST["senha"];
$tipo_user = $_POST["tipo_user"];
$data_nasc = $_POST["data_nasc"];

// criptografia
$senha_hash = hash('sha256', $senha);

$sql = "UPDATE pessoas SET nome=:nome, cpf=:cpf, senha=:senha, tipo_user=:tipo_user, data_nasc=:data_nasc, modified=NOW() WHERE id=:id";
$comando = $pdo -> prepare($sql);
$comando -> bindParam(":id", $id);
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
