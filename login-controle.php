<?php 
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

if($usuario=="carlos" && $senha=="root"){
    header("Location:formulario-cliente.html");
}else{
    echo"Usuário ou senha incorreta!";
}
?>