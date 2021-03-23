<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>verdeclaro: Feiras de BH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/colors.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/camera.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  <style>
    /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
    #map {
      position: absolute;
      height: 70%;
      width: 37%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
  <script src="assets/js/maps.js"></script>
  <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbntsx5KXXxNC8eMScEfplaZIh3yLTJsA&callback=initMap">
  </script>
</head>

<body>
  <header>
    <?php include("code/html/menu.html"); ?>
  </header>
  <?php include("code/html/search.html"); ?>
  <div class="container">
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li class="fifth_green"><a href="fairs.php"><i class="icon-chevron-right"></i> Todas as Regiões</a></li>
          <li class="fifth_green"><a href="?region=barreiro"><i class="icon-chevron-right"></i> Região Barreiro</a></li>
          <li class="fifth_green"><a href="?region=centro_sul"><i class="icon-chevron-right"></i> Região Centro Sul</a>
          </li>
          <li class="fifth_green"><a href="?region=leste"><i class="icon-chevron-right"></i> Região Leste</a></li>
          <li class="fifth_green"><a href="?region=nordeste"><i class="icon-chevron-right"></i> Região Nordeste</a></li>
          <li class="fifth_green"><a href="?region=noroeste"><i class="icon-chevron-right"></i> Região Noroeste</a></li>
          <li class="fifth_green"><a href="?region=norte"><i class="icon-chevron-right"></i> Região Norte</a></li>
          <li class="fifth_green"><a href="?region=oeste"><i class="icon-chevron-right"></i> Região Oeste</a></li>
          <li class="fifth_green"><a href="?region=pampulha"><i class="icon-chevron-right"></i> Região Pampulha</a></li>
          <li class="fifth_green"><a href="?region=venda_nova"><i class="icon-chevron-right"></i> Região Venda Nova</a>
          </li>
        </ul>
      </div>
      <div class="span9">
        <!-- Global Bootstrap settings
        ================================================== -->
        <section id="global" class="doc">
          <div class="page-header first">
            <h3>Feiras de Produtos Agrícolas</h3>
          </div>
          <h5 id="headings">Mapa por Região</h5>
          <p>
            <div id="map"></div>

          </p>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <table>
            <?php
              $xml = simplexml_load_file("assets/xml/fairs.xml") or die("Error: Cannot create object");
              foreach ($xml->children() as $fair) {
                if($_GET["region"] == $fair->region || $_GET["region"] == null){
                echo "<tr>";
                echo "<td>";
                switch($fair->type){
                  case "organic":
                    echo "<a href='#'><img src='assets/img/o.png' title=''/>";
                    break;
                  case "agroecologic":
                    echo "<a href='#'><img src='assets/img/a.png' title=''/>";
                    break;
                  default:
                  echo "<a href='#'><img src='assets/img/m.png' title=''/>";
                  break;
                }
                echo "</td>";
                echo "<td>";
                echo "<p>".$fair->address."</p>";
                echo "<p>".$fair->work_days.", ".$fair->work_hours."</p>";
                echo "</td>";
                echo "</tr>";
                echo "<tr><br></tr>";
              }
            }
            ?>
        </table>
      </div>
    </div>
  </div>
</body>

<script src="assets/js/jquery-1.8.2.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.elastislide.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/application.js"></script>
<script src="assets/js/hover/jquery-hover-effect.js"></script>
<script src="assets/js/hover/setting.js"></script>
<script src="assets/js/camera/camera.min.js"></script>
<script src="assets/js/camera/setting.js"></script>

<!-- Template Custom JavaScript File -->
<script src="assets/js/custom.js"></script>

<?php include("code/html/footer.html"); ?>

</html>