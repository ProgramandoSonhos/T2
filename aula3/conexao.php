<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursophp";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    echo "Erro na conexão";
}else{
	echo "Conectou com Sucesso";
}

?>
