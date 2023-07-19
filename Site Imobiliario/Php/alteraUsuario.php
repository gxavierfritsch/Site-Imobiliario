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
            <h3>Dados do usuario cadastrados</h3>
            
            <?php
            include("com.php");

            $sql = "SELECT id, usuario, senha FROM login ORDER BY id desc";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Identificador: " . $row["id"] . "<br>" .
                        "Usuario: " . $row["usuario"] . "<br>" .
                        "Senha: " . $row["senha"] . "<br>";

                    echo "<a href='alteraDadosUsuario.php?id={$row['id']}'>Alterar</a><br>";
                    echo "<a href='excluirUsuarioNoBD.php?id=$row[id]'>Excluir</a><br><br>";
                }
            } else {
                echo "0 resultados";
            }

            mysqli_close($con);
            ?>
        </div>
    </section>

</body>

</html>