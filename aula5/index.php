<?php
    session_start();
?>
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
        require('./conexao.php');
        require('./getparams.php');
        
        $mysqli = conecta();

        if(isset($_SESSION['msg_sucesso'])) {
            echo "<b style='color:green'>".$_SESSION['msg_sucesso']."</b>";
            session_reset();

        } else if(isset($_SESSION['msg_erro'])) {
            echo "<b style='color:red'>".$_SESSION['msg_erro']."</b>";
            session_reset();
        }
        
        // so continua se houve resultado para a query
        if($resultado = mysqli_query($mysqli, "SELECT * FROM genero")) {
            $resultadoArr = [];
            
            // enquanto houver linhas, recupere-as
            while($linha = mysqli_fetch_assoc($resultado)) {
                array_push($resultadoArr, $linha);
            }
        }
        
    ?>
    <form action="salva.php" method="post">
        Autor: <input type="text" 
                      name="autor" 
                      id="autor"
                      value="<?= $autor ?>"
                      placeholder="Insira um autor!"
                      required
               > <br>
        Música: <input type="text" 
                       name="musica" 
                       id="musica"
                       value="<?= $nome ?>"
                       placeholder="Insira uma música!"
                       required
                > <br>

        Gênero: 
        <select name="genero" id="genero">
            <?php 
                foreach ($resultadoArr as $key => $value) {
            ?>
                <option value='<?php echo $value['id'] ?>'
                    <?php if($value['nome'] == $genero) {
                            echo 'selected';
                        }
                    ?>
                >
                    <?php echo $value['nome'] ?>
                </option>
            <?php 
                }
            ?>
        </select>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>