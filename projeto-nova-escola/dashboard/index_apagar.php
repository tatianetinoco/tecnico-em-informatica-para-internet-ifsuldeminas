<?php
require_once "../adm/conexao.php";
$sql = "SELECT * FROM pessoas";
$comando = $pdo -> prepare($sql);
$comando -> execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h1>Listar Registros da base de dados</h1>
    <a href="cadastrar.php">Adicinar Novo Registro</a> <br>
    <table border="1" width="100%">
        <thead>
            <th>#ID</th>
            <th>CPF</th>
            <th>NOME</th>
            <th>SENHA</th>
            <th>TIPO</th>
            <th>DATA_NASC</th>
        </thead>
        <?php
            while ($pessoas = $comando -> fetch(PDO::FETCH_ASSOC)) {
                ?>
            <tr>
                <td><?php echo $pessoas["id"]; ?></td>
                <td><?php echo $pessoas["cpf"]; ?></td>
                <td><?php echo $pessoas["nome"]; ?></td>
                <td><?php echo $pessoas["senha"]; ?></td>
                <td><?php echo $pessoas["tipo_user"]; ?></td>
                <td><?php echo (date('d/m/y', strtotime($pessoas["data_nasc"]))) ; ?></td>
            </tr>   
            <?php } ?> 
    </table>
    
</body>
</html>
