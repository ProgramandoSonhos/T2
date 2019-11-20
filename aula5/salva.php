<?php
session_start();
require('./conexao.php');

try {
    $mysqli = conecta();
    
    $musica = $_POST['musica'];
    $autor  = $_POST['autor'];
    $genero = $_POST['genero'];
    
    $query = "INSERT INTO musicas(nome, autor, genero) VALUES('$musica', '$autor', $genero)";
    $result = mysqli_query($mysqli, $query);
    
    if($result) {
        $_SESSION['msg_sucesso'] = 'Dados da música inseridos com sucesso!';
    } else {
        $error = mysqli_error();
        $_SESSION['msg_erro'] = 'Dados da música não foram inseridos com sucesso! '.$error;
    }
    
    header('Location: /turma2/aula5');

} catch(\Throwable $excecao) {
    $_SESSION['msg_erro'] = 'Não foi possível processar requisição! ';
}