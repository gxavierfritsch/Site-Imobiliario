<?php
include("../Php/com.php");

//inicia a sessão
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

/*a variavel $result pega as variaveis $usuario e $senha e faz uma pesquisa na tabela de usuarios*/
$sql = "SELECT usuario, senha FROM login
        WHERE usuario = '$usuario' AND senha = '$senha'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
    header('Location: area.php');

} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: indexLogin.html');
    $mensagem = "Você não tem permissão para acessar";
    echo $mensagem; 
}

mysqli_close($con);

?>
