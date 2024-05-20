<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Música Projeto</title>
</head>
<body>
<div class="container-fluid">
    <?php
    include 'telamenu.php';
    ?>
<form action="salvarMusica.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="musica">Música</label>
                <input class="form-control" type="text" name="musica" required>
            </div>
            <div>
            <label for="genero" class="form-label">Escolha um Gênero musical:</label>
            <select id="genero" name="genero" class="form-select">
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="country">Country</option>
            <option value="kpop">K-pop</option>
            <option value="electroswing">Electro Swing</option>
        </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Adicionar no banco de dados">
    </form>
    </div>
</body>
</html>