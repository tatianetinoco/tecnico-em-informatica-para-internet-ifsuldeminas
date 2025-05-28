<?php

if(isset($_POST["acao"])){

    // Importando arquivo conexao.php
    require_once("adm/conexao.php");

    // Obtendo valores digitados no formulário
    $usuario = $_POST["usuario"];
    $senha   = $_POST["senha"];

    // Verificar se existe na base de dados
    $sql = "SELECT * FROM pessoas WHERE pessoas.cpf =:login and pessoas.senha = :senha";
    $comando = $pdo -> prepare($sql);
    $comando -> bindParam(":login",$usuario);
    $comando -> bindParam(":senha",$senha);
    $comando -> execute();

    if($comando -> rowCount()==1){
        echo " Existe um usuário em nossa base de dados ";
        echo ($usuario);
    } else {
        echo " Usuario não encontrado na base de dados";
    }

} else {
    echo "Erro... Acesso Indevido!";
}

?>