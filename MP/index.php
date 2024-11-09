<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <main>
        <div class="p-4">
            <h2 class="text-3xl">Seus Livros:</h2>
            <br>
            <a href="cadastrar_livro.php">
                <button class="px-4 py-2 bg-green-700 text-white">Cadastrar Livro</button>
            </a>
            <br>
            <br>
            <a href="cadastrar_usuarios.php">
                <button class="px-4 py-2 bg-green-700 text-white">Cadastrar Usuarios</button>
            </a>
        </div>

        <div class="p-10">
           <?php include "listar_livros.php"; ?>
        </div>
    </main>
</body>
</html>