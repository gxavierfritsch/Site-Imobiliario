<?php
include("../Php/com.php");

session_start();

$logado = $_SESSION['usuario'];

if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['senha']) == true)) {
  header("location:indexLogin.html");
  exit();
}

if (!isset($_SESSION['mensagem_exibida'])) {
  echo '<script>alert("Seja Bem-vindo ' .  $logado . '");</script>';
  $_SESSION['mensagem_exibida'] = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acesso Restrito</title>
  <link rel="stylesheet" href="../Css/styleArea.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="shortcut icon" href="../../Site Imobiliario/Favicon/favicon-32x32.png" type="image/x-icon">
</head>

<body>

  <header>
    <h2 style="text-align: center;">Área do corretor</h2>
    <nav class="navbar bg-body-tertiary fixed-top">
      <div class="container-fluid" style="background-color: #020147; height: 100px;">
        <img src="../Img/Podiumlogofundoremovido.png" alt="Logo" style="height: 100px;">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="color: aqua;">
          <span class="navbar-toggler-icon" style="background-color: aqua;"></span>
        </button>
      </div>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="margin-right: 25px;"></button>
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Área do Corretor</h5>
          <?php
          echo "<h5?><b>Usuario: $logado</b></h5>"
          ?>
          <button type="button" class="btn btn-outline-info" style="margin-top: 8px;"><a class="nav-link" href="../Php/logout.php" style="color: green;">Logout</a></button>

        </div>
        <div class="offcanvas-body" style="background-color: #020147; background-image: url(../Img/Podium2.png); background-repeat: no-repeat; background-position: center;">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <button type="button" class="btn btn-outline-info"><a class="nav-link active" aria-current="page" href="#" style="color: green; width: 50px;" onclick="reloadPage()">Home</a></button>

            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: green;">
                Usuários
              </a>
              <ul class="dropdown-menu" style="background-color: aquamarine;">
                <li><a class="dropdown-item" href="../Php/alteraUsuario.php" style="color: green;">Alterar cadastro</a></li>
                <li><a class="dropdown-item" href="#" style="color: green;">Excluir cadastro</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: green;">
                Imóveis
              </a>
              <ul class="dropdown-menu" style="background-color: aquamarine; ">
                <li><a class="dropdown-item" href="#" style="color: green;">Alterar dados dos imóveis</a></li>
                <li><a class="dropdown-item" href="#" style="color: green;">Excluir imovel</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>

              </ul>
            </li>
          </ul>

        </div>
      </div>
      </div>
    </nav>
  </header>



  <section class="sec1">

    <h2 style="margin-top: 150px;">Cadastro de Imóveis</h2>
    <form action="../Php/cadastro-imovel.php" method="post" enctype="multipart/form-data">
      <label for="Imovel">Coloque o título do ímovel:</label><br>
      <input type="text" name="titulo" required><br>
      <label for="preço" style="margin-top: 10px;">Preço do ímovel:</label><br>
      <input type="number" name="preco" id="preco"><br>
      <textarea name="descricao" id="" cols="40" rows="12" placeholder="Insira a descrição do ímovel" style="margin-top: 15px;"></textarea><br>
      <input type="file" name="image" style="margin-top: 8px;"><br>
      <button type="submit" class="btn btn-outline-light" style=" margin-top: 5px;">Enviar</button>
      <button type="reset" class="btn btn-outline-light" style=" margin-top: 5px;">Apagar</button>
    </form>


  </section>





  <section class="sec2">

    <div class="usuarios">
      <h2>Contatos de clientes</h2>
      <div class="clientes">
        <?php
        $sql = "SELECT id, nome, idade, email, sexo, telefone, cidade, estado, motivo, comentario FROM cadastro ORDER BY id desc";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)) {

            echo "<br><br> Id: " . $row["id"] . "<br>" .
              "Nome: " . $row["nome"] . "<br>" .
              "Idade: " . $row["idade"] . "<br>" .
              "Email: " . $row["email"] . "<br>" .
              "Sexo: " . $row["sexo"] . "<br>" .
              "Telefone: " . $row["telefone"] . "<br>" .
              "Cidade: " . $row["cidade"] . "<br>" .
              "Estado: " . $row["estado"] . "<br>" .
              "Motivo: " . $row["motivo"] . "<br>" .
              "Comentario: " . $row["comentario"] . "<br><br>" .
              '<a href="../Php/alterarContatos.php?id={$row["id"]}" class="btn btn-outline-light">Alterar</a>' .
              '<a href="../Php/excluirContatoNoBd.php?id={$row["id"]}" class="btn btn-outline-light">Excluir</a>';
          }
        }

        mysqli_close($con);

        ?>
      </div>
    </div>

  </section>






  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

  <script>
    function reloadPage() {
      location.reload();
    }
  </script>

</body>

</html>