<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IS IT SHARK WEEK? #SHARKWEEK 2016</title>
    <meta name="description" content="Information about Shark Week, including the 2016 Shark Week schedule from the Discovery Channel.">
    <meta name="keywords" content="shark week, shark week schedule, shark week 2016 schedule, shark week 2016, shark week tv, is it shark week, when is shark week, shark, sharks">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="IS IT SHARK WEEK?">
    <meta property="og:description" content="You know you've asked yourself this uberimportant question: OMG IS IT SHARK WEEK? We have the answer. Never miss a moment of SHARK WEEK again.">
    <meta property="og:image" content="/img/sw.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=GvvG5AaQvb">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=GvvG5AaQvb">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?v=GvvG5AaQvb" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-194x194.png?v=GvvG5AaQvb" sizes="194x194">
    <link rel="icon" type="image/png" href="/favicon-96x96.png?v=GvvG5AaQvb" sizes="96x96">
    <link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=GvvG5AaQvb" sizes="192x192">
    <link rel="icon" type="image/png" href="/favicon-16x16.png?v=GvvG5AaQvb" sizes="16x16">
    <link rel="manifest" href="/manifest.json?v=GvvG5AaQvb">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=GvvG5AaQvb" color="#0060f0">
    <link rel="shortcut icon" href="/favicon.ico?v=GvvG5AaQvb">
    <meta name="msapplication-TileColor" content="#0060F0">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=GvvG5AaQvb">
    <meta name="theme-color" content="#0060f0">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share+Tech+Mono">
    <link rel="stylesheet" type="text/css" href="/styles/sw-retro.css">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml">
    <link rel="canonical" href="http://isitsharkweek.com">
  </head>
  <body class="isLate">
      <!--[if lt IE 9]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
      <![endif]-->
      <?php
        $SWstart = '2016-06-26';
        $SWend = '2016-07-03';
        if(strtotime('now') < strtotime($SWstart)){
          $status = 'early';
        } elseif(strtotime('now') > strtotime($SWend)){
          $status = 'late';
        } else {
          $status = 'now';
        } ?>
    <div class="siteWrapper">
      <?php include('late.php'); ?>
      <?php include('footer.php'); ?>
      <?php include('credits.php'); ?>

    </div><!-- .siteWrapper -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="/js/modal.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#listings').apFullscreenModal({
        openSelector: '#open-listings',
        closeSelector: '.close-modal'
      });
      $('#credits').apFullscreenModal({
        openSelector: '#open-credits',
        closeSelector: '.close-modal'
      });

    });
    </script>
    <!-- Google Analytics -->
     <script>
         var _gaq=[['_setAccount','UA-9982959-1'],['_trackPageview']];
         (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
         g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
         s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
