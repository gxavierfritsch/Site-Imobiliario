<?php
include("com.php");

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$motivo = $_POST['motivo'];
$comente = $_POST['comente'];

$sql = "INSERT INTO cadastro( nome, idade, email, sexo, telefone, cidade, estado, motivo, comentario)VALUES('$nome', '$idade', '$email', '$sexo', '$telefone', '$cidade', '$estado', '$motivo', '$comente')";

if(mysqli_query($con, $sql)){
    echo "Dados enviados com sucesso, Retornaremos em breve!";
         
}

else{
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
 mysqli_close($con);

?>

