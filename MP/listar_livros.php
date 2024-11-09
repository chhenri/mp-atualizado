<?php

include "conexao.php";

$sql = "SELECT id_livro, nome_livro, autor_livro, lancamento_livro FROM livros";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'>
            <thead>
                <h2 class='text-2xl font-bold'>Livros cadastrados:</h2>
                <br>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Ano de Publicação</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td class='p-4'>" . $row["id_livro"] . "</td>
                <td class='p-4'>" . $row["nome_livro"] . "</td>
                <td class='p-4'>" . $row["autor_livro"] . "</td>
                <td class='p-4'>" . $row["lancamento_livro"] . "</td>
                <td>
                <a href='deletar_livros.php' class='px-4 py-2 bg-red-700 text-white'>Deletar</a>
                </td>
                <td>
                <a href='atualizar_livros.php' class='px-4 py-2 bg-blue-700 text-white'>Atualizar</a>
                </td>
              </tr>";
    }
    echo "</tbody></table>";
}

?>
