<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<?php session_start(); ?>
<?php
$url = $_SERVER['REQUEST_URI'];
$path = parse_url($url, PHP_URL_QUERY);
$pathFragments = explode('=', $path);
$venue = end($pathFragments);
$search = array("%20", "%27","%C3%A9");
$replace = array(" ", "'","&#233;");
$venue = str_replace($search, $replace, $venue);
?>

<html class="no-js" lang="en" >
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
<meta name="apple-mobile-web-app-title" content="Austin Happy Hours Venue">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="happy-hours-logo.jpg">
<link rel="icon" type="image/png" href="http://media.cmgdigital.com/shared/media/web/site/www_austin360_com/images/favicon.ico">

<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="happy-hours-logo.jpg">
<meta name="apple-mobile-web-app-title" content="Austin Happy Hours Venue">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<title>Venue | Austin Happy Hour: Best Bars, Food, Drink Specials | Austin360</title>
<meta property="og:title" content="Happy hour specials at <?php echo $venue; ?>"/>
<meta property="og:image" content="http://projects.statesman.com/happy-hours/happy-hours-logo.jpg"/>
<meta property="og:description" content="See daily happy hour specials for <?php echo $venue; ?> and search for more specials by distance, day of the week and venue."/>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="../foundation/css/normalize.css">
  <link rel="stylesheet" href="../foundation/css/foundation.css">
  <script src="../foundation/js/vendor/custom.modernizr.js"></script>

  <?php include "../common/metrics-head.js";?>

  <!-- project additions -->
  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="happyhours.css">
  <?php include "advertising.js";?>
</head>
<body>
<br>

<div class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"><h1><a href="http://www.austin360.com" target="_blank"><img src="../../common/360logo.png" /></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
      <ul class="right">
          <!-- <li class="active"><a href="./">EDIT</a></li> -->
          <li class="active"><a href="./">SEARCH</a></li>
          <li><a href="submit.php">SUBMIT</a></li>
      </ul>
  		</section>
	</nav>
</div>

<div class="row">
	<div class="large-12 centered columns">
		<h1>Austin Happy Hours</h1>
		<a href="./" class="button tiny radius">New Search</a>
	</div>
</div>

<div class="row">

	<div class="small-12 medium-4 large-4 columns">
		<h3>Venue</h3>
<!-- Begin Caspio Deploy Code (for inserting in body) -->
<?php require_once('../caspio/dpload.txt');dpload('http://bridge.caspio.net/','e76c00008590b6e189b843cd93ff','i');?>
<!-- End Caspio Deploy Code -->

	</div>
	
	<div class="small-12 medium-8 large-8 columns">
		<h3>Specials</h3>
		<div id="cbe76c00006bb080fc1aea43d2bfc7"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript" language="javascript">try{f_cbload("e76c00006bb080fc1aea43d2bfc7","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00006bb080fc1aea43d2bfc7">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
	</div>
</div>


<hr>
<!-- Share code -->
<div class="row">
	<div class="large-4 medium-4 large-centered medium-centered columns">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style" addthis:description="Use Austin360's Happy Hours database to search for specials by distance, day of the week and venue." addthis:title="Check out the happy hours at <?php echo $venue; ?>">
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone_share"></a>
<a class="addthis_button_email"></a>
<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f93567099a6a05"></script>
<!-- AddThis Button END -->
    </div>
</div>
<hr>



<!-- Ad code -->
<?php include "advertising.php";?>

<!-- body content here -->

<!-- footer code -->   
<?php include "../common/footer.php";?>

<script src="../foundation/js/vendor/jquery.js"></script>
<script src="../foundation/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
<script>
  $(document.head).append('<meta property=\'og:title\' content=\'' + VenueName + ' happy hours\'\/>');
</script>



<!-- Metrics code -->
<?php include "metrics-project.js";?>
<?php include "../common/metrics.js";?>

</body>
<head>
<script>
  $(document.head).append('<title>Austin Happy Hours | ' + VenueName + ' | Austin360<\/title>');
</script>
</head>
</html>
