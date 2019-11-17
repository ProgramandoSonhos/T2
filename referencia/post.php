<?php

$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];


?>
<!DOCTYPE html>
<html>
<body>

<h2>Lista com Funcionários</h2>


<table style="width:100%;" border="1">
  <tr>
    <th>Nome</th>
    <th>Cargo</th> 
    <th>Salário</th>
  </tr>
  <tr>
    <td><?php echo $nome; ?></td>
    <td><?php echo $cargo; ?></td>
    <td><?php echo $salario; ?></td>
  </tr>
 </table>

</body>
</html>
