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
    <div class="row">
        <div class="col">
        <?php
        require 'conectaBanco.php';
        
        $musica = $_POST['musica'];
        $genero = $_POST['genero'];
        $desc = $_POST['descricao'];
        if(empty($musica)){
            echo "<p>Campo musica deve ser preenchido!</p>";
        }else{
            // Monta comando SQL
            $sql = "INSERT INTO musica(musica, genero, descricao) VALUES 
                                            ('$musica','$genero', '$desc')";
            $banco->query($sql); // Executa comando SQL
            if($banco->affected_rows >= 1){
                echo "<p>$musica cadastrada com sucesso!</p>";
            }else{
                echo "Erro ao cadastrar $musica no banco de dados!";
            }
        }
    
        $banco->close();
        ?>
    </div>
    </div>
    </div>
</body>
</html>