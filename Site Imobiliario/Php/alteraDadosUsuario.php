<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/styleArea.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <section class="sec2">
        <div class="usuarios">
            <?php
            include("com.php");

            $sql = "SELECT * FROM login WHERE id = " . $_GET['id'];

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Identificador: " . $row["id"] . "<br>" .
                        "Usuario: " . $row["usuario"] . "<br>" .
                        "Senha: " . $row["senha"] . "<br>";
                }
            } else {
                echo "Erro: " . mysqli_error($con);
            }

            mysqli_close($con);
            ?><br><br>

            <form class="row g-3" action="alteraUsuarioNoBanco.php" method="post">
                <div class="col-md-6">
                    <label for="Nome" class="form-label">Usuario:</label>
                    <input type="text" class="form-control" id="Nome" name="usuario">
                </div>
                <div class="col-md-6">
                    <label for="Idade" class="form-label">Senha:</label>
                    <input type="text" class="form-control" id="Idade" name="senha">
                </div>
                <div class="col-md-6">
                    <label for="Idade" class="form-label">Id:</label>
                    <input type="text" class="form-control" id="Idade" name="id">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-info">Enviar</button>
                </div>
            </form>
    </section>




    </div>


</body>

</html>