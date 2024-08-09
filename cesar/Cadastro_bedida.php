
<?php
    include("Conexao_bebidas.php");

    if(isset($_POST['bt_nome'])){ 

    

            $nome = $_POST['bt_nome'];
            $preco =$_POST['bt_preco'];
            $marca = $_POST['bt_marca'];
            $descricao = $_POST['bt_descricao'];

             $mysqli->query("INSERT INTO bebidas (nome, marca, preco, descricao) values('$nome','$marca','$preco' , '$descricao')") or
                die($mysqlierrno);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="meu_estilo.css">
</head>
<body>
    <div class="container text-center">
        <h1>Cadastro de Bebidas</h1>
    </div>
    <div class="container">
        <form action="" method="post">

            <label for="">Nome:</label>
            <input class="form-control" type="text" name="bt_nome">
            <div class="mb-3">
                <label for="">Preço:</label>
                <input class="form-control" type="text" name="bt_preco">
            </div>
           
            <label for="">Marca:</label>
            <input class="form-control" type="text" name="bt_marca" >

            <label for="">Descriçao:</label>
            <input class="form-control" type="text" name="bt_descricao" >

            <input class="btn btn-success" type="submit" value="Cadastrar">
            <input class="btn btn-danger" type="reset" value="Voltar">

      


        </form>
    </div>
    
</body>
</html>
