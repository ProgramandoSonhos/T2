<?php

require('conexao.php');

$selectCargos = "select id,nome from cargos";
$resultados = $conexao->query($selectCargos);
$cargos = "";

if ($resultados->num_rows > 0) {
    $cargos = $resultados->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Nenhum resultado encontrado! <br />";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h2>Forms com PHP</h2>

    <?php
    foreach ($cargos as $cargo) {
        ?>
        <a href="exibevalor.php?idcargo=<?php echo $cargo['id']; ?>&nome=<?php echo $cargo['nome']; ?>">
            Exibe <?php echo $cargo['nome']; ?>
        </a>
        <br />
    <?php
    }
    ?>
    <br /><br />
    <form action="salva.php" method="post">
        Nome: <input type="text" name="nome"><br />
        Cargo:
        <select name="cargo">
            <?php
            foreach ($cargos as $cargo) {
                ?>
                <option value="<?php echo $cargo['id'];  ?>"><?php echo $cargo['nome']; ?></option>
            <?php
            }
            ?>
        </select>
        <br />
        Salário: <input type="text" name="salario"><br />
        <input type="submit" value="Salvar">
    </form>
</body>

</html>
