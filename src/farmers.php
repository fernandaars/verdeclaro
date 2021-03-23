<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>verdeclaro: Produtores de BH</title>
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
          <li class="fifth_green"><a href="produtores.php?type=agroecologic"><i class="icon-chevron-right"></i> Produtores Agroecológicos</a></li>
          <li class="fifth_green"><a href="produtores.php?type=organic"><i class="icon-chevron-right"></i> Produtores Orgânicos</a></li>
          <li class="fifth_green"><a href="produtores.php?type=mixed"><i class="icon-chevron-right"></i> Produtores Mistos</a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Global Bootstrap settings
        ================================================== -->
        <section id="global" class="doc">
          <div class="page-header first">
            <h3>Produtores Agrícolas</h3>
          </div>
          <table>
            <?php
              $xml = simplexml_load_file("assets/xml/farmers.xml") or die("Error: Cannot create object");
              foreach ($xml->children() as $farmer) {
                if($_GET["type"] == $farmer->type || $_GET["type"] == null){
                echo "<tr>";
                echo "<td>";
                echo "<h5>".$farmer->name."</h5>";
                echo "<a href='https://www.instagram.com/" . $farmer->instagram . "/'><img src=".$farmer->profile." alt='Portfolio name' title='' /></a>";
                echo "</td>";
                echo "<td>";
                echo "<h5>".$farmer->instagram."</h5>";
                echo "<h5>".$farmer->whatsapp."</h5>"; 
                echo "<h5>".$farmer->owner."</h5>";
                echo "</td>";
                echo "</tr>";
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