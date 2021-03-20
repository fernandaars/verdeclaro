<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>verdeclaro: Feiras de BH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- styles -->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../../assets/css/colors.css" rel="stylesheet">
  <link href="../../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../../assets/css/docs.css" rel="stylesheet">
  <link href="../../assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="../../assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../../assets/css/camera.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300|Open+Sans:400,300,300italic,400italic"
    rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/color/success.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="../../assets/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../assets/ico/apple-touch-icon-57-precomposed.png">
  <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        position: absolute;
        height: 70%;
        width: 37%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 10%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script src="../../assets/js/maps.js"></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbntsx5KXXxNC8eMScEfplaZIh3yLTJsA&callback=initMap">
    </script>
</head>

<body>
  <header>
    <?php include("../html/menu.html"); ?>
  </header>
  <?php include("../html/pesquisa.html"); ?>
  <div class="container">
	<div class="row">
		<div class="span3 bs-docs-sidebar">
			<ul class="nav nav-list bs-docs-sidenav">
				<li class="fifth_green"><a href="?region=barreiro"><i class="icon-chevron-right"></i> Região Barreiro</a></li>
				<li class="fifth_green"><a href="?region=centro_sul"><i class="icon-chevron-right"></i> Região Centro Sul</a></li>
				<li class="fifth_green"><a href="?region=leste"><i class="icon-chevron-right"></i> Região Leste</a></li>
				<li class="fifth_green"><a href="?region=nordeste"><i class="icon-chevron-right"></i> Região Nordeste</a></li>
				<li class="fifth_green"><a href="?region=noroeste"><i class="icon-chevron-right"></i> Região Noroeste</a></li>
                                <li class="fifth_green"><a href="?region=norte"><i class="icon-chevron-right"></i> Região Norte</a></li>
                                <li class="fifth_green"><a href="?region=oeste"><i class="icon-chevron-right"></i> Região Oeste</a></li>
                                <li class="fifth_green"><a href="?region=pampulha"><i class="icon-chevron-right"></i> Região Pampulha</a></li>
                                <li class="fifth_green"><a href="?region=venda_nova"><i class="icon-chevron-right"></i> Região Venda Nova</a></li>
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
			<pre class="prettyprint linenums">
				 &lt;!DOCTYPE html&gt; &lt;html lang="en"&gt; ... &lt;/html&gt;
			</pre>
			<h5>Typography and links</h5>
			<p>
				Since scaffold template built with bootstrap so we are using bootstrap basic global display, typography, and link styles. In addition we add our custom rules to remove radius, shadow and other things by adding 'overwrite.css' file in folder CSS
			</p>
			<p>
				All basic bootstrap components style also changed with 'overwrite.css' file such as buttons, navigation, menu..etc
			</p>
			</section>
			<!-- Grid system
        ================================================== -->
			<section id="gridSystem" class="doc">
			<div class="page-header">
				<h3>Default grid system</h3>
			</div>
			<h5>Live grid example</h5>
			<p>
				This template using default Bootstrap grid system utilizes <strong>12 columns</strong>, making for a 940px wide container without <a href="./scaffolding.html#responsive">responsive features</a> enabled. With the responsive CSS file added, the grid adapts to be 724px and 1170px wide depending on your viewport. Below 767px viewports, the columns become fluid and stack vertically.
			</p>
			<div class="bs-docs-grid">
				<div class="row show-grid">
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
				</div>
				<div class="row show-grid">
					<div class="span2">
						2
					</div>
					<div class="span3">
						3
					</div>
					<div class="span4">
						4
					</div>
				</div>
				<div class="row show-grid">
					<div class="span4">
						4
					</div>
					<div class="span5">
						5
					</div>
				</div>
				<div class="row show-grid">
					<div class="span9">
						9
					</div>
				</div>
			</div>
			<h5>Basic grid HTML</h5>
			<p>
				For a simple two column layout, create a <code>.row</code> and add the appropriate number of <code>.span*</code> columns. As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).
			</p>
			<pre class="prettyprint linenums">
				 &lt;div class="row"&gt; &lt;div class="span4"&gt;...&lt;/div&gt; &lt;div class="span8"&gt;...&lt;/div&gt; &lt;/div&gt;
			</pre>
			<p>
				Given this example, we have <code>.span4</code> and <code>.span8</code>, making for 12 total columns and a complete row.
			</p>
			<h5>Offsetting columns</h5>
			<p>
				Move columns to the right using <code>.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code>.offset4</code> moves <code>.span4</code> over four columns.
			</p>
			<div class="bs-docs-grid">
				<div class="row show-grid">
					<div class="span4">
						4
					</div>
					<div class="span3 offset2">
						3 offset 2
					</div>
				</div>
				<!-- /row -->
				<div class="row show-grid">
					<div class="span3 offset1">
						3 offset 1
					</div>
					<div class="span3 offset2">
						3 offset 2
					</div>
				</div>
				<!-- /row -->
				<div class="row show-grid">
					<div class="span6 offset3">
						6 offset 3
					</div>
				</div>
				<!-- /row -->
			</div>
			<pre class="prettyprint linenums">
				 &lt;div class="row"&gt; &lt;div class="span4"&gt;...&lt;/div&gt; &lt;div class="span3 offset2"&gt;...&lt;/div&gt; &lt;/div&gt;
			</pre>
			<h5>Nesting columns</h5>
			<p>
				To nest your content with the default grid, add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.
			</p>
			<div class="row show-grid">
				<div class="span9">
					 Level 1 column
					<div class="row show-grid">
						<div class="span6">
							 Level 2
						</div>
						<div class="span3">
							 Level 2
						</div>
					</div>
				</div>
			</div>
			<pre class="prettyprint linenums">
				 &lt;div class="row"&gt; &lt;div class="span9"&gt; Level 1 column &lt;div class="row"&gt; &lt;div class="span6"&gt;Level 2&lt;/div&gt; &lt;div class="span3"&gt;Level 2&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;
			</pre>
			</section>
			<!-- Fluid grid system
        ================================================== -->
			<section id="fluidGridSystem" class="doc">
			<div class="page-header">
				<h3>Fluid grid system</h3>
			</div>
			<h5>Live fluid grid example</h5>
			<p>
				The fluid grid system uses percents instead of pixels for column widths. It has the same responsive capabilities as our fixed grid system, ensuring proper proportions for key screen resolutions and devices.
			</p>
			<div class="bs-docs-grid">
				<div class="row-fluid show-grid">
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
					<div class="span1">
						1
					</div>
				</div>
				<div class="row-fluid show-grid">
					<div class="span4">
						4
					</div>
					<div class="span4">
						4
					</div>
					<div class="span4">
						4
					</div>
				</div>
				<div class="row-fluid show-grid">
					<div class="span4">
						4
					</div>
					<div class="span8">
						8
					</div>
				</div>
				<div class="row-fluid show-grid">
					<div class="span6">
						6
					</div>
					<div class="span6">
						6
					</div>
				</div>
				<div class="row-fluid show-grid">
					<div class="span12">
						12
					</div>
				</div>
			</div>
			<h5>Basic fluid grid HTML</h5>
			<p>
				Make any row "fluid" by changing <code>.row</code> to <code>.row-fluid</code>. The column classes stay the exact same, making it easy to flip between fixed and fluid grids.
			</p>
			<pre class="prettyprint linenums">
				 &lt;div class="row-fluid"&gt; &lt;div class="span4"&gt;...&lt;/div&gt; &lt;div class="span8"&gt;...&lt;/div&gt; &lt;/div&gt;
			</pre>
			<h5>Fluid offsetting</h5>
			<p>
				Operates the same way as the fixed grid system offsetting: add <code>.offset*</code> to any column to offset by that many columns.
			</p>
			<div class="bs-docs-grid">
				<div class="row-fluid show-grid">
					<div class="span4">
						4
					</div>
					<div class="span4 offset4">
						4 offset 4
					</div>
				</div>
				<!-- /row -->
				<div class="row-fluid show-grid">
					<div class="span3 offset3">
						3 offset 3
					</div>
					<div class="span3 offset3">
						3 offset 3
					</div>
				</div>
				<!-- /row -->
				<div class="row-fluid show-grid">
					<div class="span6 offset6">
						6 offset 6
					</div>
				</div>
				<!-- /row -->
			</div>
			<pre class="prettyprint linenums">
				 &lt;div class="row-fluid"&gt; &lt;div class="span4"&gt;...&lt;/div&gt; &lt;div class="span4 offset2"&gt;...&lt;/div&gt; &lt;/div&gt;
			</pre>
			<h5>Fluid nesting</h5>
			<p>
				Nesting with fluid grids is a bit different: the number of nested columns should not match the parent's number of columns. Instead, each level of nested columns are reset because each row takes up 100% of the parent column.
			</p>
			<div class="row-fluid show-grid">
				<div class="span12">
					 Fluid 12
					<div class="row-fluid show-grid">
						<div class="span6">
							 Fluid 6
						</div>
						<div class="span6">
							 Fluid 6
						</div>
					</div>
				</div>
			</div>
			<pre class="prettyprint linenums">
				 &lt;div class="row-fluid"&gt; &lt;div class="span12"&gt; Fluid 12 &lt;div class="row-fluid"&gt; &lt;div class="span6"&gt;Fluid 6&lt;/div&gt; &lt;div class="span6"&gt;Fluid 6&lt;/div&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;
			</pre>
			</section>
			<!-- Layouts (Default and fluid)
        ================================================== -->
			<section id="layouts" class="doc">
			<div class="page-header">
				<h3>Layouts</h3>
			</div>
			<h5>Fixed layout</h5>
			<p>
				Provides a common fixed-width (and optionally responsive) layout with only <code>&lt;div class="container"&gt;</code> required.
			</p>
			<div class="mini-layout">
				<div class="mini-layout-body">
				</div>
			</div>
			<pre class="prettyprint linenums">
				 &lt;body&gt; &lt;div class="container"&gt; ... &lt;/div&gt; &lt;/body&gt;
			</pre>
			<h5>Fluid layout</h5>
			<p>
				Create a fluid, two-column page with <code>&lt;div class="container-fluid"&gt;</code>&mdash;great for applications and docs.
			</p>
			<div class="mini-layout fluid">
				<div class="mini-layout-sidebar">
				</div>
				<div class="mini-layout-body">
				</div>
			</div>
			<pre class="prettyprint linenums">
				 &lt;div class="container-fluid"&gt; &lt;div class="row-fluid"&gt; &lt;div class="span2"&gt; &lt;!--Sidebar content--&gt; &lt;/div&gt; &lt;div class="span10"&gt; &lt;!--Body content--&gt; &lt;/div&gt; &lt;/div&gt; &lt;/div&gt;
			</pre>
			</section>
			<!-- Responsive design
        ================================================== -->
			<section id="responsive" class="doc">
			<div class="page-header">
				<h3>Responsive design</h3>
			</div>
			<h5>Enabling responsive features</h5>
			<p>
				Turn on responsive CSS in your project by including the proper meta tag and additional stylesheet within the <code>&lt;head&gt;</code> of your document. If you've compiled Bootstrap from the Customize page, you need only include the meta tag.
			</p>
			<pre class="prettyprint linenums">
				 &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt; &lt;link href="assets/css/bootstrap-responsive.css" rel="stylesheet"&gt;
			</pre>
			<p>
				<span class="label label-info">Heads up!</span> Bootstrap doesn't include responsive features by default at this time as not everything needs to be responsive. Instead of encouraging developers to remove this feature, we figure it best to enable it as needed.
			</p>
			<h5>About responsive Bootstrap</h5>
			<p>
				Media queries allow for custom CSS based on a number of conditions&mdash;ratios, widths, display type, etc&mdash;but usually focuses around <code>min-width</code> and <code>max-width</code>.
			</p>
			<ul>
				<li>Modify the width of column in our grid</li>
				<li>Stack elements instead of float wherever necessary</li>
				<li>Resize headings and text to be more appropriate for devices</li>
			</ul>
			<p>
				Use media queries responsibly and only as a start to your mobile audiences. For larger projects, do consider dedicated code bases and not layers of media queries.
			</p>
			<h5>Supported devices</h5>
			<p>
				Bootstrap supports a handful of media queries in a single file to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:
			</p>
			<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>
					Label
				</th>
				<th>
					Layout width
				</th>
				<th>
					Column width
				</th>
				<th>
					Gutter width
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>
					Large display
				</td>
				<td>
					1200px and up
				</td>
				<td>
					70px
				</td>
				<td>
					30px
				</td>
			</tr>
			<tr>
				<td>
					Default
				</td>
				<td>
					980px and up
				</td>
				<td>
					60px
				</td>
				<td>
					20px
				</td>
			</tr>
			<tr>
				<td>
					Portrait tablets
				</td>
				<td>
					768px and above
				</td>
				<td>
					42px
				</td>
				<td>
					20px
				</td>
			</tr>
			<tr>
				<td>
					Phones to tablets
				</td>
				<td>
					767px and below
				</td>
				<td class="muted" colspan="2">
					Fluid columns, no fixed widths
				</td>
			</tr>
			<tr>
				<td>
					Phones
				</td>
				<td>
					480px and below
				</td>
				<td class="muted" colspan="2">
					Fluid columns, no fixed widths
				</td>
			</tr>
			</tbody>
			</table>
			<pre class="prettyprint linenums">
				 /* Large desktop */ @media (min-width: 1200px) { ... } /* Portrait tablet to landscape and desktop */ @media (min-width: 768px) and (max-width: 979px) { ... } /* Landscape phone to portrait tablet */ @media (max-width: 767px) { ... } /* Landscape phones and down */ @media (max-width: 480px) { ... }
			</pre>
			<h5>Responsive utility classes</h5>
			<p>
				For faster mobile-friendly development, use these utility classes for showing and hiding content by device. Below is a table of the available classes and their effect on a given media query layout (labeled by device). They can be found in <code>responsive.less</code>.
			</p>
			<table class="table table-bordered table-striped responsive-utilities">
			<thead>
			<tr>
				<th>
					Class
				</th>
				<th>
					Phones <small>767px and below</small>
				</th>
				<th>
					Tablets <small>979px to 768px</small>
				</th>
				<th>
					Desktops <small>Default</small>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th>
					<code>.visible-phone</code>
				</th>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-hidden">
					Hidden
				</td>
			</tr>
			<tr>
				<th>
					<code>.visible-tablet</code>
				</th>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-hidden">
					Hidden
				</td>
			</tr>
			<tr>
				<th>
					<code>.visible-desktop</code>
				</th>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-visible">
					Visible
				</td>
			</tr>
			<tr>
				<th>
					<code>.hidden-phone</code>
				</th>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-visible">
					Visible
				</td>
			</tr>
			<tr>
				<th>
					<code>.hidden-tablet</code>
				</th>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-hidden">
					Hidden
				</td>
				<td class="is-visible">
					Visible
				</td>
			</tr>
			<tr>
				<th>
					<code>.hidden-desktop</code>
				</th>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-visible">
					Visible
				</td>
				<td class="is-hidden">
					Hidden
				</td>
			</tr>
			</tbody>
			</table>
			<h5>When to use</h5>
			<p>
				Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation. Responsive utilities should not be used with tables, and as such are not supported.
			</p>
			<h5>Responsive utilities test case</h5>
			<p>
				Resize your browser or load on different devices to test the above classes.
			</p>
			<h5>Visible on...</h5>
			<p>
				Green checkmarks indicate that class is visible in your current viewport.
			</p>
			<ul class="responsive-utilities-test">
				<li>Phone<span class="visible-phone">&#10004; Phone</span></li>
				<li>Tablet<span class="visible-tablet">&#10004; Tablet</span></li>
				<li>Desktop<span class="visible-desktop">&#10004; Desktop</span></li>
			</ul>
			<h5>Hidden on...</h5>
			<p>
				Here, green checkmarks indicate that class is hidden in your current viewport.
			</p>
			<ul class="responsive-utilities-test hidden-on">
				<li>Phone<span class="hidden-phone">&#10004; Phone</span></li>
				<li>Tablet<span class="hidden-tablet">&#10004; Tablet</span></li>
				<li>Desktop<span class="hidden-desktop">&#10004; Desktop</span></li>
			</ul>
			</section>
		</div>
	</div>
</div>

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