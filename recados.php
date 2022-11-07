<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elen Marissa</title>
    <!-- Fonts Google -->
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <!-- Bootstrap, CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <!-- Barra de navegação-->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
              <img class="logo" src="imagens/icon-Nav.png" alt="">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
      
              <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav ms-auto text-center">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="ftComent" href="recados-form.html"><img src="imagens/icon-comentários.png" width="35" height="35"></a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>    
    </header>
    <main>
      <!-- Banner da Área de Recados-->
      <section id="bannerComent">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="imagens/noite.jpg" class="ftComent d-block w-100" alt="bannerComent">
                  </div>
                </div>
              </div>
        </section>

        <section id="lista-recados">
            <div class="container">                
            <h4 class="titulos">Meus recados</h4>
            <p><a href="recados-form.html">Clique aqui</a> para escrever um comentário!</p><br>
            
            <?php
                $sql = "SELECT * FROM comentarios WHERE ativo LIKE 'Y'";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=site_elen','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

            <?php foreach ($lista as $linha): ?>
                <div class="balao">
                    <p class="recado"><?php echo $linha['recado'] ?></p>			
                    <h4 class="nome"><?php echo $linha['nome'] ?></h4>
                </div>
            <?php endforeach ?>

            </div>
        </section>        
    </main>
    


        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>