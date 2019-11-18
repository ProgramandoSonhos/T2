<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form música</title>
</head>
<body>
    <?php
        // iniciando conexao com o banco local
        $mysqli = mysqli_connect('localhost', 'root', '', 'aula4');
        if(mysqli_connect_errno($mysqli)) {
            echo "Deu ruim! " . mysqli_connect_error();
        }

        $resultado = mysqli_query($mysqli, "SELECT * FROM genero");
        $resultado = mysqli_fetch_assoc($resultado);

        var_dump($resultado);
        
    ?>
    <form action="salva.php" method="post">
        Autor: <input type="text" name="autor" id="autor"> <br>
        Música: <input type="text" name="musica" id="musica"> <br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>