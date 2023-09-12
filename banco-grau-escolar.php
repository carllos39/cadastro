<?php 
?>

<?php
function listaGrauEnsino($conexao){
    $grauEnsinos=array();
    $query="select * from ensino";
    while($resultado=mysqli_fetch_assoc($resultado)){
    array_push($grauEnsinos,$grauEnsino);
}
return $grauEnsinos;
} 
?>