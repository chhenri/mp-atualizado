<?php
    include "conexao.php";

    $nome = $_POST["nome"];
    $autor = $_POST["autor"];
    $data = $_POST["ano"];

    $sql = mysqli_query($conn, "INSERT INTO livros (nome_livro, autor_livro, lancamento_livro) VALUES ('$nome', '$autor', '$data')");

    if($sql){
        header("Location: sucesso.php");
    }
?>