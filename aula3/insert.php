<?php

require('conexao.php');

$nomeCargo = array("Atendente", "Supervisor de TM", 'Caixa');

foreach ($nomeCargo as $item) {
    $sql = "insert into cargos(nome) values ('$item')";

    if ($conexao->query($sql) === true) {
        echo 'Valor: <strong>' . $item . '</strong> inserido com sucesso!<br /><br />';
    } else {
        echo 'Erro ao salvar o Valor: <strong>' . $item . '</strong> ! ' . $conexao->error . '<br /><br />';
    }
}
