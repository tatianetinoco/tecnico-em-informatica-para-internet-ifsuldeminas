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
    <script src=https://code.jquery.com/jquery-3.7.1.min.js></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
</head>
<body>

    <h1>Listar Registros da base de dados</h1>
    <a href="cadastrar.php">Adicinar Novo Registro</a> <br>
    <table id = "minhaTabela">
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#minhaTabela').DataTable({
                "language": {
                    "url": "http://cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
                },
                dom: 'Bfrtip',
                "buttons": [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                paging: true
            });
        });
    </script>

    <!-- DataTables JS + botões de exportação -->
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    
</body>
</html>
