<?php 
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

if($usuario="" && $senha=""){
    header("Location: formulario-cliente.html");
}else{
    echo"Usuário ou senha incorreta!";
}
?>