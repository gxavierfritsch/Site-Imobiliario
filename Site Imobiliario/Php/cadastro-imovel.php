<?php
include("com.php");

if (isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK) {
    $image = $_FILES["image"];

    // Verifica se o campo de imagem foi preenchido
    if (!empty($image["name"])) {
        // define o diretório onde a imagem será armazenada
        $target_dir = "../imagens-upload/";

        // define o nome do arquivo como a data e hora atual, seguido da extensão original do arquivo
        $target_file = $target_dir . date("YmdHis") . "." . pathinfo($image["name"], PATHINFO_EXTENSION);

        // move o arquivo para o diretório definido
        if (move_uploaded_file($image["tmp_name"], $target_file)) {
            // insere as informações da imagem na base de dados
            $sql_imagens = "INSERT INTO imagens (nome, caminho) VALUES ('" . $image["name"] . "', '" . $target_file . "')";
            if (mysqli_query($con, $sql_imagens)) {
                // define as informações dos imóveis
                $titulo = $_POST['titulo'];
                $preco = $_POST['preco'];
                $descricao = $_POST['descricao'];

                // insere as informações dos imóveis na tabela "cadastro_imoveis"
                $sql_imovel = "INSERT INTO cadastro_imoveis (titulo, preco, descricao, caminho) VALUES ('$titulo', '$preco', '$descricao', '$target_file')";
                if (mysqli_query($con, $sql_imovel)) {
                    echo "Imóvel cadastrado com sucesso";
                } else {
                    echo "Erro ao cadastrar o imóvel: " . mysqli_error($con);
                }
            } else {
                echo "Erro ao enviar a imagem: " . mysqli_error($con);
            }
        } else {
            echo "Erro ao fazer upload da imagem.";
        }
    } else {
        echo "O campo de imagem não foi preenchido.";
    }
} elseif (isset($_FILES["image"])) {
    echo "Erro ao enviar a imagem: " . $_FILES["image"]["error"];
}

mysqli_close($con);
?>
