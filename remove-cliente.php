<?php
include("conexao.php");
include("banco-cliente.php");
?>
<?php
$id=$_GET['id'];
if(removeCliente($conexao,$id)){
echo"Removido com sucesso!";
}else{
    echo"Não removido!";
}
?>