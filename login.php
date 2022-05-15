<?php
session_start();
extract($_POST);

if($nome == "Administrador" && $senha == "123") 
{
    $_SESSION['usuario'] = [
        'nome' => $nome,
        'senha' => $senha
    ];
    header ("Content-type: application/json");
    echo (json_encode(["mensagem" => "OK"])); 
//    header('Location: restrito.php');

}
else {
    echo "Usuário ou senha inválidos!";
}