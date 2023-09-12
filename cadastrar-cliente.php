<?php
include("conexao.php");  
include("banco-cliente.php");  
?>

<?php

$nome=$_POST['nome'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$esporte=$_POST['esporte'];
 $grauEnsino_id=$_POST['grauEnsino_id'];

if(inserirCliente($conexao,$nome,$email,$sexo,$esporte,$grauEnsino_id)){
    echo"Cadastrado com sucesso!";
}else{
    echo"Não cadastrou!";
}
?>