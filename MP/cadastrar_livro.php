<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <form action="salvar_livros.php" method="post" class="h-screen flex flex-col items-center justify-center">
        <h2 class="text-3xl">Cadastrar Livro</h2>
        <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Nome do livro" name="nome"> <br>
        <input type="text" class="w-50 border border-1 border-black px-4 py-2" placeholder="Autor" name="autor"> <br>
        <input type="date" name="ano"> <br>
        <button class="px-4 py-2 bg-green-700 text-white">Cadastrar</button>
    </form>
</body>
</html>