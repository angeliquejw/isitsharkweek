<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      IS IT SHARK WEEK?
    </title>
    <meta name="description" content=
    "Information about Shark Week, including the 2013 Shark Week schedule from the Discovery Channel , and shark videos, shark games and shark links to feed your appetite for sharks before and after the annual event.">
    <meta name="keywords" content=
    "shark week, shark week schedule, shark week 2013 schedule, shark week 2013, shark week tv, is it shark week, when is shark week, shark, sharks, great white, shark conservation, shark preservation, shark activism">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="imagetoolbar" content="false">
    <meta property="og:title" content="IS IT SHARK WEEK?">
    <meta property="og:description" content=
    "You know you've asked yourself this uberimportant question: OMG IS IT SHARK WEEK? We have the answer. Never miss a moment of SHARK WEEK again.">
    <meta property="og:image" content="/img/fin.jpg">
    <link rel="shortcut icon" type="image/x-icon" href=
    "/favicon.ico">
    <link rel="stylesheet" type="text/css" href="sharkwk.css">
    <link rel="sitemap" type="application/xml" title="Sitemap"
    href="sitemap.xml">
    <link rel="canonical" href="http://isitsharkweek.com">
  </head>
  <body>
      <!--[if lt IE 7]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
      <![endif]-->
    <div id="pagewrap">
      <?php
      $SWstart = '2013-08-04';
      $SWend = '2013-08-11';
      if(strtotime('now') < strtotime($SWstart)){
              include("early.php");
      } elseif(strtotime('now') > strtotime($SWend)){
              include("late.php");
      } else {
              include("sharkweek.php");}
      ?>
      <?php include("sidebars.php"); ?>
      <div class="clearfix"></div>
      <?php include("footer.php"); ?>
    </div><!-- #pagewrap -->
<!-- JQuery -->
    <script src="jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
      // <![CDATA[
         $(document).ready(function () {
         $('#menu1').tabify();
         });
      // ]]>
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