<?php

if(isset($_GET['nome'])&&(isset($_GET['sobrenome']))){
	echo $_GET['nome'].' '.$_GET['sobrenome'];
}else{
	echo "Nenhum parâmetro passado";
}

?>
