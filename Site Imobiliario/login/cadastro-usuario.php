<?php
include("../Php/com.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$sql= "INSERT INTO login (usuario, senha)VALUES('$usuario', '$senha')";

if(mysqli_query($con, $sql)){
    echo "<span>Usuario cadastrado com sucesso</span>";
}

else{
    echo "<span>erro ao cadastrar o usuario: " . mysqli_error($con) . "</span>";
}

}

?>