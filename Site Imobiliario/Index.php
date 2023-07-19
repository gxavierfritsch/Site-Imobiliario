<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Podium Imobiliária</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link rel="stylesheet" href="../Site Imobiliario/Css/style.css">
  <link rel="shortcut icon" href="../Site Imobiliario/Favicon/favicon-32x32.png" type="image/x-icon">
</head>
</head>

<body>
  <header>
    <!--Menu inicial-->
    <nav class="navbar" style="background-color: #020147; width: 100%; margin: auto; display: flex; justify-content: space-evenly; height: 155px;">
      <!-- Navbar content -->
      <!--Logotipo-->
      <img src="../Site Imobiliario/Img/Podiumlogofundoremovido.png" alt="logo" width="145px">

      <!--Botoes menu-->
      <button type="button" class="btn btn-outline-info">Home</button>
      <button type="button" class="btn btn-outline-info"><a href="#Imoveis" style="color: inherit; text-decoration-line: none;">Aluguel/Venda</a></button>
      <button type="button" class="btn btn-outline-info"><a href="#Sobre" style="color: inherit; text-decoration-line: none;">Sobre</a></button>
      <button type="button" class="btn btn-outline-info"><a href="#Equipe" style="color: inherit; text-decoration-line: none;">Nossa Equipe</a></button>
      <button type="button" class="btn btn-outline-info"><a href="#contato" style="color: inherit; text-decoration-line: none;">Contato</a></button>
      <button type="button" class="btn btn-outline-info"><a href="../Site Imobiliario/login/indexLogin.html" style="color: inherit; text-decoration-line: none;">Login</a></button>
    </nav>
  </header>


  <article>
    <section class="sec1">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" style="width: auto; margin: auto;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="../Site Imobiliario/Img/Casa1.jpg" class="w-100" alt="CasaSanta-Efigenia" style="width: auto; float: left;">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
              <h5 style="color: black;">Casa à Venda</h5>
              <p>Casa de alto padrão localizado no bairro Santa Efigênia</p>
              <p>R$500.000</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="../Site Imobiliario/Img/Loft.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
              <h5>Loft disponivel no Ed. Tokyo</h5>
              <p>Loft amplo localizado no bairro Fraron</p>
              <p>R$368.000</p>

            </div>
          </div>
          <div class="carousel-item">
            <img src="../Site Imobiliario/Img/predio3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: white;">
              <h5>Apartamento disponivel à venda Ed. Porto Valencia</h5>
              <p>Localizado no bairro Anchieta, este apartamento possui um interior todo aquitedado e refinado.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="sec2">
      <h2 id="imo"><a name="Imoveis">Imóveis para Aluguel e Venda</a></h2>
      <div class="cards">
        <!--Cards dos Imoveis-->
        <div class="card" style="width: 18rem;">
          <img src="../Site Imobiliario/Img/Loft.jpg" class="card-img-top" alt="..." height="250px" width="250px">
          <img src="../Site Imobiliario/Img/Predioloft.png" alt="Predioloft">

          <div class="card-body">
            <h5 class="card-title">Loft à Venda</h5>
            <p class="card-text">Loft mobiliado situado no centro de Pato Branco com uma bela visão da cidade. <b>Cod.133</b> </p>
            <a href="#contato" class="btn btn-info" style="margin-top: 25px;">Tenho interesse</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../Site Imobiliario/Img/Interiorap1.png" class="card-img-top" alt="...">
          <img src="../Site Imobiliario/Img/Predio2.png" alt="">
          <div class="card-body">
            <h5 class="card-title">Apartamento à Venda</h5>
            <p class="card-text">Localizado em um dos melhores bairros de Pato Branco, possui uma area de lazer com piscina. <b>Cod.134</b> </p>
            <a href="#contato" class="btn btn-info" style="margin-top: 25px;">Tenho interesse</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../Site Imobiliario/Img/Casa2.png" class="card-img-top" alt="...">
          <img src="../Site Imobiliario/Img/Interiorcasa2.png" alt="">
          <div class="card-body">
            <h5 class="card-title">Casa para aluguel</h5>
            <p class="card-text">Casa em codominio fechado situado no bairro Bancários, com 1 suite e 2 quartos, varanda com piscina. <b>Cod.135</b></p>
            <a href="#contato" class="btn btn-info" style="padding-bottom: 2px;">Tenho interesse</a>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="../Site Imobiliario/Img/Casa3.jpeg" class="card-img-top" alt="...">
          <img src="../Site Imobiliario/Img/Vista.png" alt="...">
          <div class="card-body">
            <h5 class="card-title">Casa à Venda</h5>
            <p class="card-text">Uma bela escolha para quem quer viver com uma vista da cidade</p>
            <a href="#contato" class="btn btn-info" style="padding-bottom: 2px;">Tenho interesse</a>
          </div>
        </div>
      </div>
      <a href="../Site Imobiliario/Php/mostra-imoveis.php" class="btn btn-outline-info" style=" display: flex; flex-direction: row; width: 80px; margin-left: 920px;">Ver mais imoveis</a>
      <div class="sobre">
        <h2><a name="Sobre">Sobre</a></h2>
        <h5>Somos uma empresa localizada no estado do Paraná na cidade de Pato Branco, trabalhando há mais de 25 anos no Imobiliario ajudando você a conquistar sonhos.</h5>
      </div>

      <!--Corretores-->
      <h3 style="text-align: center; color: aqua; padding-top: 25px;"><a name="Equipe">Conheça a nossa Equipe</a></h3>
      <div class="card-group">
        <div class="card">
          <img src="../Site Imobiliario/Img/Corretor1.png" class="card-img-top" alt="Corretor1" style="background-image: url(../img/escritorio.jpg);   background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
          <div class="card-body">
            <h5 class="card-title">Renan Costa</h5>
            <p class="card-text">Trabalhando como corretor há 10 anos Renan tem se tornado referencia como corretor na região.</p>
          </div>
          <div class="card-footer">

          </div>
        </div>
        <div class="card">
          <img src="../Site Imobiliario/Img/Corretor2.png" class="card-img-top" alt="Corretor2" height="385px" style="background-image: url(../img/escritorio.jpg);   background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
          <div class="card-body">
            <h5 class="card-title">Nicole Baumann</h5>
            <p class="card-text">Uma das fundadoras da Podium, vem se destacando por atender boa parte da região sudeste do Paraná.</p>
          </div>
          <div class="card-footer">

          </div>
        </div>
        <div class="card">
          <img src="../Site Imobiliario/Img/Corretor3.png" class="card-img-top" alt="..Corretor3" style="background-image: url(../img/escritorio.jpg);   background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
          <div class="card-body">
            <h5 class="card-title">Fabiana Figueredo</h5>
            <p class="card-text">Há 2 anos na empresa nicole vem mostrando potencial, e está sempre em prontidão para melhor atende-lo.</p>
          </div>
          <div class="card-footer">

          </div>
        </div>
      </div>

    </section>

    <section class="sec3">
      <h3 style="text-align: center; color: aqua; padding-top: 25px;"><a name="contato" id="contato">Contato</a></h3>
      <h5 style="text-align: center; color: whitesmoke;">Se interessou por algum imóvel? Deixe seu contato que te retornaremos!</h5>

      <div class="formu">
        <form class="row g-3" action="../Site Imobiliario/Php/inserir.php" method="post">
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


    </section>
  </article>

  <footer class="fot">
    <div class="info">

      <img src="../Site Imobiliario/Img/Podium2.png" alt="" height="220px" style="margin-top: 50px ;">
      <p style="margin-top: 125px;">telefone: 0800 668 558</p>
      <p style="margin-top: 125px;">Email: sac@podiumimobiliaria.com</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d947.9364661301714!2d-52.67014706757197!3d-26.231415287774496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1680201649461!5m2!1spt-BR!2sbr" width="200" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    <div class="final">
      <p>Site com todos os direitos reservados</p>
      <p>Desenvolvido por Gabriel Xavier Fritsch</p>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


</body>

</html>