<?php
include("com.php");

$sql = "DELETE FROM login WHERE id = " .$_GET['id'];

if(mysqli_query($con, $sql)){
    echo"deletado com sucesso";
}

else{
    echo"Erro: " . mysqli_error($con);
}

mysqli_close($con);

?>