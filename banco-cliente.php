<?php
include("conexao.php");
?>
<?php
function inserirCliente($conexao,$nome,$email,$sexo,$esporte,$grauEnsino_id){
    $query="INSERT INTO cadastro(nome,email,sexo,esporte,grauEnsino_id) VALUES ('{$nome}','{$email}','{$sexo}','{$esporte}',{$grauEnsino_id})";
  return  mysqli_query($conexao,$query);
}

function ListaClientes($conexao){
    $clientes=array();
    $resultado=mysqli_query($conexao,"select c.*,e.nome as grauEnsino_nome from cadastro as c join ensino as e on e.id=c.grauEnsino_id");
    while($cliente=mysqli_fetch_assoc($resultado)){
        array_push($clientes,$cliente);
    }
    return $clientes;
}
function removeCliente($conexao ,$id){
    $query="delete from cadastro where id={$id}";
    return mysqli_query($conexao,$query);

}
function alterarCliente($conexao,$id,$nome,$email,$sexo,$esporte,$grauEnsino_id){
    $query="UPDATE cadastro SET nome='{$nome}',email='{$email}',sexo='{$sexo}',esporte='{$esporte}',grauEnsino_id={$grauEnsino_id} WHERE id={$id}";
    return mysqli_query($conexao,$query);

}
?>