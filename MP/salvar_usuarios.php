<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];

    $sql = mysqli_query($conn, "INSERT INTO usuarios (nome_usuario, sobrenome_usuario, cpf_usuario) VALUES ('$nome', '$sobrenome', '$cpf')");

    if($sql){
        header("Location: sucesso2.php");
    }
?>