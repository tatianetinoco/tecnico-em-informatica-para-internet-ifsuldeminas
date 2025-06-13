<?php
include_once("view/topo.php");
include_once("view/lateral.php");
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-itens-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 d-flex align-items-center">
            <i class="bi bi-person me-2"></i> Cadastrar Pessoas
        </h1>
    </div>

    <form method="POST" action="processa/proc_cadastrar_pessoas.php" class="needs-validation" novalidate>

        <div class="col-md-6">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite seu Nome" required>
            <div class="invalid-feedback">
                Por favor, insira o Nome.
            </div>
        </div>

        <div class="col-md-6 my-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" name="cpf" class="form-control" oninput="mascaraCPF(this)" placeholder="Digite seu CPF" required>
            <div class="invalid-feedback">
                Por favor, insira o CPF.
            </div>
        </div>

        <div class="col-md-6 my-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua Senha" required>
            <div class="invalid-feedback">
                Por favor, insira a Senha.
            </div>
        </div>

        <div class="col-md-6 my-3">
            <label for="tipo_user" class="form-label">Tipo Usuário:</label>
            <input type="text" name="tipo_user" class="form-control" placeholder="Digite Tipo Usuário" required>
            <div class="invalid-feedback">
                Por favor, insira o Tipo Usuário.
            </div>
        </div>

        <div class="col-md-2 my-3">
            <label for="data_nasc" class="form-label">Data Nascimento:</label>
            <input type="date" name="data_nasc" class="form-control" required>
            <div class="invalid-feedback">
                Por favor, insira a Data de Nascimento.
            </div>
        </div>

        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="index_dash.php" class="btn btn-secondary">Voltar</a>
        </div>
    </form>
    </div>
</main>

<!-- Máscara CPF -->
<script>
    function mascaraCPF(i) {
        var v = i.value;
        if (isNaN(v[v.length - 1])) {
            i.value = v.substring(0, v.length - 1);
            return;
        }
        i.setAttribute("maxlength", "14");
        if (v.length == 3 || v.length == 7) i.value += ".";
        if (v.length == 11) i.value += "-";
    }
</script>

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<?php include_once("view/rodape.php");
