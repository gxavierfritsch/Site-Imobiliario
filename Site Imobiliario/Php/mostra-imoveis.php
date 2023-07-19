<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imóveis</title>
  <link rel="stylesheet" href="../Css/styleImoveis.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="shortcut icon" href="../Favicon/favicon-16x16.png" type="image/x-icon">

</head>
<body>
    <div class="nav">
    <img src="../Img/Podium (1).png" alt="logo">
    <h1>Imóveis</h1>
    </div>
  <div class="row">
    <?php
    include("com.php");

    // Consulta os imóveis armazenados no banco de dados
    $sql = "SELECT * FROM cadastro_imoveis";
    $result = mysqli_query($con, $sql);

    // Exibe os imóveis em cards
    while ($imovel = mysqli_fetch_assoc($result)) {
        echo '<div class="col-md-4">';
        echo '<div class="card" style=" width: 480px; margin-top: 25px;">';
        echo '<img src="' . $imovel['caminho'] . '" class="card-img-top" alt="Imagem do Imóvel" style ="height: 350px; width: 478px;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $imovel['titulo'] . '</h5>';
        echo '<p class="card-text">' . $imovel['descricao'] . '</p>';
        echo '<p class="card-text">Preço: R$ ' . $imovel['preco'] . '</p>';
        echo '<button type="button" class="btn btn-outline-info"><a href="../Site%Imobiliario/Index.php" style="color: inherit; text-decoration-line: none;">Entrar em contato</a></button>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    mysqli_close($con);
    ?>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  
</body>
</html>
