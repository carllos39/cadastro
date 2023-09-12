<?php
include("conexao.php");
include("banco-cliente.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>lista de Clientes</h1>
<table border="1">
<tr>
<th>Id</th>
<th>Nome</th>
<th>email</th>
<th>Sexo</th>
<th>Esporte</th>
<th>Grau de ensino</th>
<th>Ação</th>
</tr>
<?php 
$clientes=ListaClientes($conexao);
foreach($clientes as $cliente){
    ?>  
<tr>
    <td><?=$cliente['id']?></td>
    <td><?=$cliente['nome']?></td>
    <td><?=$cliente['email']?></td>
    <td><?=$cliente['sexo']?></td>
    <td><?=$cliente['esporte'] ?></td>
    <td><?=$cliente['grauEnsino_nome'] ?></td>
    <td><a href="remove-cliente.php?id=<?= $cliente['id']?>">Remover</a></td>
</tr>
<?php
}
?>
</table>
<a href="formulario-cliente.html">Voltar</a>
</body>
</html>