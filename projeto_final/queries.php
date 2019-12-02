<?php

function insereDados($mysqli, $nome, $nascimento, $cpf, $estado_civil) {
    // cria query de inserção no banco
    $query = "INSERT INTO dados_pessoais(nome, nascimento, cpf, estado_civil)
              VALUES('$nome', '$nascimento', $cpf, '$estado_civil')";

    // executa query de inserção no banco
    mysqli_query($mysqli, $query);
    // verifica se houve erro
    if(mysqli_errno($mysqli)) {
        echo "<b style='color:red'>".mysqli_error($mysqli)."</b><br>";
        return false;
    } else {
        echo "<b style='color:green'>Registro inserido com sucesso!</b><br>";
    }

    return true;
}

function recuperaPessoas($mysqli) {
    $listaPessoas = [];
    $query = "SELECT nome, nascimento 
              FROM dados_pessoais 
              ORDER BY nome ASC";

    $resultado = mysqli_query($mysqli, $query);
    if(mysqli_errno($mysqli)) {
        echo "Deu ruim na query! <br>".mysqli_error();
        return [];
    } else {
        while ($linha = mysqli_fetch_assoc($resultado)) {
            array_push($listaPessoas, $linha);
        }
    }
    return $listaPessoas;
}