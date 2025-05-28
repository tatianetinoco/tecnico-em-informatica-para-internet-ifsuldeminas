<?php
require_once "../adm/conexao.php";
$sql = "SELECT * FROM pessoas";
$comando = $pdo->prepare($sql);
$comando->execute();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">XLS</button>
      </div>
      <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar" class="align-text-bottom"></span>
            This week
          </button> -->
    </div>
  </div>

  <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

  <h2>Manutenção de Pessoas</h2>
  <div class="table-responsive">

    <table class="table table-striped table-sm" id = "minhaTabela">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">CPF</th>
          <th scope="col">Nome</th>
          <th scope="col">Tipo Usuário</th>
          <th scope="col">Data Nasc</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($pessoas = $comando->fetch(PDO::FETCH_ASSOC)) {
        ?>
          <tr>
            <td><?php echo $pessoas["id"]; ?></td>
            <td><?php echo $pessoas["cpf"]; ?></td>
            <td><?php echo $pessoas["nome"]; ?></td>
            <td><?php echo $pessoas["tipo_user"]; ?></td>
            <td><?php echo (date('d/m/y', strtotime($pessoas["data_nasc"]))); ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</main>
</div>
</div>
