<?php

require('conexao.php');

$idcargo = $_GET['idcargo'];

$selectCargos = "select nome from cargos where id=$idcargo";
$resultados = $conexao->query($selectCargos);
$cargos = "";

if ($resultados->num_rows > 0) {
    $cargos = $resultados->fetch_all(MYSQLI_ASSOC);
} else {
    echo "Nenhum resultado encontrado! <br />";
}

var_dump($cargos);


?>
