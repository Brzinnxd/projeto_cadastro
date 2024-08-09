<?php 
    require("cadastro_cnx.php");

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $ingredientes = $_POST["ingredientes"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

        $mysqli->query("INSERT INTO lanches (nome, ingredientes, preco, descricao) values('$nome', '$ingredientes', '$preco', '$descricao')") or
                    die($mysqlierrno);
    }

    
        
    ?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Lanches</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container text-center">
        <h1>Cadastro de Lanches</h1>
    </div>

    <div class="container">
        <form action="" method="post">
            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" type="text" name="nome"></textarea>
                <label for="floatingTextarea">Nome</label>
            </div>
            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" type="text" name="ingredientes"></textarea>
                <label for="floatingTextarea">Ingredientes</label>
            </div>
            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" type="text" name="preco"></textarea>
                <label for="floatingTextarea">Preço</label>
            </div>
            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" type="text" name="descricao"></textarea>
                <label for="floatingTextarea">Descrição</label>
            </div>

            <button type="submit" class="btn btn-success mt-3">Cadastrar</button>
            <button type="button" class="btn btn-danger mt-3">Voltar</button>
        </form>
    </div>
    
    
</body>
</html>