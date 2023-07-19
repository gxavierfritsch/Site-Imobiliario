<?php
include("com.php");

$sql = "UPDATE cadastro SET  

nome='".$_POST['nome']."' ,
idade='".$_POST['idade']."' ,
email='".$_POST['email']."' ,
sexo='".$_POST['sexo']."' ,
telefone='".$_POST['telefone']."' ,
cidade='".$_POST['cidade']."' ,
estado='".$_POST['estado']."' ,
motivo='".$_POST['motivo']."' ,
comentario='".$_POST['comentario']."' 
WHERE id = ".$_GET['id'];


if (mysqli_query($con, $sql)) {
    echo "Registro alterado com sucesso";
} 
  
  mysqli_close($con);
?>