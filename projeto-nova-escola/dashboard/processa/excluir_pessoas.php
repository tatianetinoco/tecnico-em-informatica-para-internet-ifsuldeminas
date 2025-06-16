<?php
// importar arquivo de conexão
require("../../adm/conexao.php");

// preparar e executar o BD a exclusão do registro
$id = $_GET["id"];
$sql = "UPDATE pessoas SET status = 2 WHERE id = :id"; // Soft delete
$comando = $pdo->prepare($sql);
$comando->bindParam(":id", $id);
$comando->execute();

if ($comando):
    echo " <script>
                alert('Registro Excluído com Sucesso!');
                window.location.href = '../index_dash.php';
            </script>";

else:
    echo " <script>
                alert('Erro ao Excluir Registro!');
                window.location.href = '../index_dash.php';
            </script>";

endif;
?>
