<?php
require_once("../adm/conexao.php");
include_once("view/topo.php");
include_once("view/lateral.php");

if(isset($_GET['id'])) {
    $sql = "SELECT * FROM pessoas WHERE id = :id";
    $comando = $pdo -> prepare($sql);
    $comando -> bindValue(":id", $_GET['id']);
    $comando -> execute();
    $pessoas = $comando-> fetch();
} else {
    header("Location: index_dash.php");
}

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-itens-center pt-3 pb-2 mb-3 border-bottom">
        <form method="POST" action="processa/proc_editar_pessoas.php">

            <label for="nome">Nome:</label><br>
            <input type="text" name="nome" size="50" value = "<?php echo $pessoas['nome']; ?>"/><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf" value = "<?php echo $pessoas['cpf']; ?>"/><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" name="senha" value = "<?php echo "*SENHA*"; ?>"/><br><br>

            <label for="tipo_user">Tipo Usuário:</label><br>
            <input type="text" name="tipo_user" value = "<?php echo $pessoas["tipo_user"]; ?>"/><br><br>

            <label for="data_nasc">Data Nascimento:</label><br>
            <input type="date" name="data_nasc" value = "<?php echo $pessoas["data_nasc"]; ?>"/><br><br>

            <input type="hidden" name="id" value="<?php echo $pessoas["id"]; ?>">
            <input type="submit" class="btn btn-success" value="Salvar Edição">
            <a href="index_dash.php" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</main>

<?php include_once("view/rodape.php");
