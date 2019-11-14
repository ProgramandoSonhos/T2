<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Músicas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php require('./cabecalho.php'); ?>

    <fieldset>
        <legend>Dados da música</legend>
        <form action="salva.php" method='POST'>
            <label for="nome">Nome: </label><br>
            <input type="text" name="nome" id="nome"><br>

            <br>

            <label for="autor">Autor: </label><br>
            <input type="text" name="autor" id="autor"><br>

            <br>
            <br>
            <input type="submit" value="Envia!">
        </form>
    </fieldset>

    <?php include('./rodape.php'); ?>
</body>
</html>