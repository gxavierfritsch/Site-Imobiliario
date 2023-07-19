<?php
include("com.php");

$sql = "UPDATE login SET  

usuario='".$_POST['usuario']."' ,
senha='".$_POST['senha']."' 
WHERE id = ".$_GET['id'];


if (mysqli_query($con, $sql)) {
    echo "Registro alterado com sucesso";
} 
  
  mysqli_close($con);
?>