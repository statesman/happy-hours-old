<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <?php
  $meta = array(
    "title" => "Austin Happy Hours | Austin360",
    "description" => "Welcome to Austin360's Happy Hours database. Search for Austin happy hours by distance, day of the week and venue.",
    "thumbnail" => "http://projects.statesman.com/happy-hours/assets/happy-hours-logo.jpg",
    "url" => "http://projects.statesman.com/happy-hours/",
    "twitter" => "austin360"
  );
?>

  <title>Interactive: <?php print $meta['title']; ?> | Austin American-Statesman</title>
  <link rel="shortcut icon" href="http://media.cmgdigital.com/shared/theme-assets/242014/www.austin360.com_8bc327bbc45a4eafb5625408192c5ff6.ico" />

  <link rel="canonical" href="<?php print $meta['url']; ?>" />

  <meta name="description" content="<?php print $meta['description']; ?>">

  <meta property="og:title" content="<?php print $meta['title']; ?>"/>
  <meta property="og:description" content="<?php print $meta['description']; ?>"/>
  <meta property="og:image" content="<?php print $meta['thumbnail']; ?>"/>
  <meta property="og:url" content="<?php print $meta['url']; ?>"/>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@<?php print $meta['twitter']; ?>" />
  <meta name="twitter:title" content="<?php print $meta['title']; ?>" />
  <meta name="twitter:description" content="<?php print $meta['description']; ?>" />
  <meta name="twitter:image" content="<?php print $meta['thumbnail']; ?>" />
  <meta name="twitter:url" content="<?php print $meta['url']; ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="SXSW Side Parties">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="assets/appicon.png">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/style.css">

  <link href='http://fonts.googleapis.com/css?family=Lusitana:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>


  <?php /* CMG advertising and analytics */ ?>
  <?php include "includes/advertising.inc"; ?>
  <?php include "includes/metrics-head.inc"; ?>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

        <a class="navbar-brand" href="http://www.austin360.com/" target="_blank">
          <img width="122" height="50" src="assets/logo_austin360_color.png">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="./">Search <span class="sr-only">(current)</span></a></li>
        <li><a href="submit.php">Submit</a></li>
        <li class="visible-xs small-social"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right social hidden-xs">
          <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-facebook-square"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo urlencode($meta['url']); ?>&via=<?php print urlencode($meta['twitter']); ?>&text=<?php print urlencode($meta['title']); ?>"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://plus.google.com/share?url=<?php echo urlencode($meta['url']); ?>"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
  </div>
</nav>
<div id="back">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 header">
        <h1 id="pagetitle">Austin Happy Hours</h1>
        <?php include "includes/banner-ad.inc";?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6" id="venue-search">
        <div class="visible-xs">
          <!-- <h3>xs</h3> -->
          <div id="cbe76c00006d2d740819d64d0ea6cc"></div>
          <script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
          <script type="text/javascript">try{f_cbload("e76c00006d2d740819d64d0ea6cc","http:");}catch(v_e){;}</script>
          <div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00006d2d740819d64d0ea6cc">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
        </div>
        <div class="hidden-xs">
          <!-- <h3>bigger than xs</h3> -->
          <div id="cbe76c00002fc8e9f160cb454ea546"></div>
          <script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
          <script type="text/javascript" language="javascript">try{f_cbload("e76c00002fc8e9f160cb454ea546","http:");}catch(v_e){;}</script>
          <div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00002fc8e9f160cb454ea546">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
        </div>
     </div>
      <div class="col-xs-12 col-sm-6">
        <?php include "includes/about.inc"; ?>
      </div>
    </div>



  </div>

    <!-- bottom matter -->
    <?php include "includes/legal.inc";?>
    <?php include "includes/project-metrics.inc"; ?>
    <?php include "includes/metrics.inc"; ?>


    <script src="dist/scripts.js"></script>

</div>

  <?php if($_SERVER['SERVER_NAME'] === 'localhost'): ?>
    <script src="//localhost:35729/livereload.js"></script>
  <?php endif; ?>
</body>
</html>
