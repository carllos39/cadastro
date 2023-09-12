<?php
include("conexao.php");  
include("banco-cliente.php");  
?>

<?php
$id=$_POST['id'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$sexo=$_POST['sexo'];
$esporte=$_POST['esporte'];
$grauEnsino_id=$_POST['grauEnsino_id'];

if(alterarCliente($conexao,$id,$nome,$email,$sexo,$esporte,$grauEnsino_id)){
    echo"Alterado com sucesso!";
}else{
    echo"Não alterado!";
}
?>