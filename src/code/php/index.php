<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>verdeclaro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../../assets/css/overwrite.css" rel="stylesheet">
  <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../../assets/css/camera.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/color/success.css" rel="stylesheet">

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="../../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="../../assets/ico/favicon.png">
</head>

<body>
  <header>
    <?php include("../html/menu.html"); ?>
  </header>

  <section id="intro">
    <div class="jumbotron masthead">

      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="camera_wrap camera_black_skin" id="camera_wrap_2">
              <div data-thumb="../../assets/img/logo.png" data-src="../../assets/img/logo.png">
                <div class="camera_caption fadeFromBottom">
                  <h2>Tecnologia para Agroecologia</h2>
                  <div class="hidden-phone">
                    <p>
                      O projeto verdeclaro promove a criação e divulgação de novas tecnologias para a agricultura agroecológica.
                    </p>
                  </div>
                </div>
              </div>
              <div data-thumb="../../assets/img/banner_1.gif" data-src="../../assets/img/banner_1.gif">
                <div class="camera_caption fadeFromBottom">
                  <h2>Nosso Primeiro Lema</h2>
                  <div class="hidden-phone">
                    <p>
                      Antes de tudo, verde-claro é uma cor: a cor da natureza viva.
                    </p>
                  </div>
                </div>
              </div>
              <div data-thumb="../../assets/img/banner_2.gif" data-src="../../assets/img/banner_2.gif">
                <div class="camera_caption fadeFromBottom">
                  <h2>Nosso Segundo Lema</h2>
                  <div class="hidden-phone">
                    <p>
                      A agricultura é o combustível do mundo, mas sem sustentabilidade esse combustível pode se extinguir.
                    </p>
                  </div>
                </div>
              </div>
              <div data-thumb="../../assets/img/banner_3.gif" data-src="../../assets/img/banner_3.gif">
                <div class="camera_caption fadeFromBottom">
                  <h2>Nosso Terceiro Lema</h2>
                  <div class="hidden-phone">
                    <p>
                      Como o principal usuário, o foco principal de toda tecnologia deve ser o uso e entedimento do agricultor.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- #camera_wrap_1 -->

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end tagline -->

  <section id="maincontent">
    <div class="container">

      <div class="row">
        <div class="span3">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapright m-icon-white"></i></span>&nbsp;&nbsp;Feiras</h3>
          <p>Um das melhores formas de apoiar o produtor rural - seja ele agroecológico, orgânico ou familiar - é a compra de produtos
            nas feiras urbanas.
            <h5><a href="feiras.php"><span class="btn btn-large btn-success"> Ver Feiras Disponíveis</span></a></h5>
          </p>
        </div>
        <div class="span3">
          <div class="well sixth_green box text-white">
            <img src="../../assets/img/icon_1.png" alt="" />
            <a href="feiras.php">
              <h3>Feira Orgânica de BH</h3>
              <p class="text-muted">
                Comercialização de hortaliças, frutas e cereais cultivados segundo os princípios da agricultura orgânica,
                por produtores rurais da região metropolitana.
              </p>
            </a>
          </div>
        </div>
        <div class="span3">
          <div class="text-white well fifth_green box">
            <img src="../../assets/img/icon_2.png" alt="" />
            <a href="categorias.php">
              <h3>Feira Direto da Roça</h3>
              <p>
                Comercialização direta de produtores da agricultura familiar da região metropolitana aos consumidores,
                garantindo preços justos para ambos.
              </p>
            </a>
          </div>
        </div>
        <div class="span3">
          <div class="well box fourth_green">
            <img src="../../assets/img/icon_3.png" alt="" />
            <a href="feiras.php">
              <h3>Feira Terra Viva</h3>
              <p>
                A Feira Terra Viva é um empreendimento que une produtores e
                consumidores e que respeita a saúde, as relações humanas e o meio ambiente.
              </p>
            </a>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section id="bottom">
    <div class="container">

      <!-- divider -->
      <div class="row">
        <div class="span12">
          <div class="divider"></div>
        </div>
      </div>
      <!-- end divider -->


      <div class="row">
        <div class="span12">
          <h3 class="heading-success"><span class="btn btn-large btn-success"><i class="m-icon-big-swapdown m-icon-white"></i></span>&nbsp;&nbsp;Produtores</h3><br>
          <div class="row">
            <div class="span12">
              <div id="latest-work" class="carousel btleft">
                <div id="latest-work" class="carousel-wrapper">

                  <ul class="portfolio-home da-thumbs">
                    <?php
                    $xml = simplexml_load_file("../../assets/xml/farmers.xml") or die("Error: Cannot create object");
                    foreach ($xml->children() as $farmer) {
                      echo "<li>";
                      echo "<div class='thumbnail'>";
                      echo "<br>";
                      echo "<div class='image-wrapp'>";
                      echo "<a href='https://www.instagram.com/" . $farmer->instagram . "/'><img src=".$farmer->profile." alt='Portfolio name' title='' /></a>";
                      echo "</a>";
                      echo "<br>";
                      echo "</div>";
                      echo "<div class='caption'>";
                      echo "<h4> " . $farmer->name  . " </h4> ";
                      echo "<a href='https://www.instagram.com/" . $farmer->instagram . "/'><i class='m-icon-big-swapdown m-icon-white'></i>".$farmer->instagram."</a>";
                      echo "<br>";
                      echo "<a href=''><i class='m-icon-big-swapdown m-icon-white'></i>".$farmer->whatsapp."</a>";
                      echo "</div>";
                      echo "</div>";
                      echo "</li>";
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <script src="../../assets/js/jquery-1.8.2.min.js"></script>
  <script src="../../assets/js/jquery.easing.1.3.js"></script>
  <script src="../../assets/js/google-code-prettify/prettify.js"></script>
  <script src="../../assets/js/modernizr.js"></script>
  <script src="../../assets/js/bootstrap.js"></script>
  <script src="../../assets/js/jquery.elastislide.js"></script>
  <script src="../../assets/js/jquery.flexslider.js"></script>
  <script src="../../assets/js/jquery.prettyPhoto.js"></script>
  <script src="../../assets/js/application.js"></script>
  <script src="../../assets/js/hover/jquery-hover-effect.js"></script>
  <script src="../../assets/js/hover/setting.js"></script>
  <script src="../../assets/js/camera/camera.min.js"></script>
  <script src="../../assets/js/camera/setting.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="../../assets/js/custom.js"></script>

</body>
<?php include("../html/footer.html"); ?>

</html>