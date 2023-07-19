<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/styleArea.css">
</head>

<body>

    <section class="sec2">

        <div class="usuarios">
            <h2>Contatos de clientes</h2>
            <div class="clientes">
                <?php
                include("com.php");

                $id = $_GET['id'];
                $sql = "SELECT * FROM cadastro WHERE id = '$id'";

                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "Identificador: " . $row["id"] . "<br>" .
                            "Nome: " . $row["nome"] . "<br>" .
                            "Idade: " . $row["idade"] . "<br>" .
                            "Email: " . $row["email"] . "<br>" .
                            "Sexo: " . $row["sexo"] . "<br>" .
                            "Telefone: " . $row["telefone"] . "<br>" .
                            "Cidade: " . $row["cidade"] . "<br>" .
                            "Estado: " . $row["estado"] . "<br>" .
                            "Motivo: " . $row["motivo"] . "<br>" .
                            "Comentario: " . $row["comentario"] . "<br><br>";
                    }
                } else {
                    echo "Nenhum registro encontrado.";
                }

                mysqli_close($con);
                ?>


<div class="formul">
        <form class="row g-3" action="alteraUsuarioNoBanco.php" method="post">
          <div class="col-md-6">
            <label for="Nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="Nome" name="nome">
          </div>
          <div class="col-md-6">
            <label for="Idade" class="form-label">Idade:</label>
            <input type="text" class="form-control" id="Idade" name="idade">
          </div>
          <div class="col-12">
            <label for="Email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="Email" placeholder="exemplo@gmail.com" name="email">
          </div>
          <div class="col-12">
            <p>Sexo:</p>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sexo" name="sexo">
              <label class="form-check-label" for="gridCheck">
                Masculino
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="sexo" name="sexo">
              <label class="form-check-label" for="gridCheck">
                Feminino
              </label>
            </div>
          </div>

          <div class="col-12">
            <label for="Telefone" class="form-label">Telefone:</label>
            <input type="number" class="form-control" id="Telefone" placeholder="(77)99988-9999" name="telefone">
          </div>
          <div class="col-md-6">
            <label for="Cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="Cidade" name="cidade">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select" name="estado">
              <option selected>Escolha:</option>
              <option>Paraná</option>
              <option>Santa Catarina</option>
              <option>Outros</option>
            </select>
          </div>

          <div class="col-md-4">
            <label for="Motivo" class="form-label">Motivo do contato</label>
            <select id="inputState" class="form-select" name="motivo">
              <option selected>Escolha:</option>
              <option>Dúvida</option>
              <option>Elogio</option>
              <option>Outros</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="Comentar" class="form-label">Comente:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Comente aqui" name="comente"></textarea>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-info">Enviar</button>
          </div>
        </form>
      </div>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>