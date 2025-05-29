<?php
include_once("view/topo.php");
include_once("view/lateral.php");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-itens-center pt-3 pb-2 mb-3 border-bottom">
        <form method="POST" action="processa/proc_cadastrar_pessoas.php">

            <label for="nome">Nome:</label><br>
            <input type="text" name="nome"><br><br>

            <label for="cpf">CPF:</label><br>
            <input type="text" name="cpf"><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" name="senha"><br><br>

            <label for="tipo_user">Tipo Usuário:</label><br>
            <input type="text" name="tipo_user"><br><br>

            <label for="data_nasc">Data Nascimento:</label><br>
            <input type="date" name="data_nasc"><br><br>

            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>
    </div>
</main>

<?php include_once("view/rodape.php");
