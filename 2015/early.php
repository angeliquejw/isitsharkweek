<header>
<!-- AddThis Button BEGIN -->
	<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
	<div id="addthis">
		<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;username=isitsharkweek"><img src="http://s7.addthis.com/static/btn/sm-share-en.gif" width="83" height="16" alt="Bookmark and Share" /></a>
	</div>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=isitsharkweek"></script>
<!-- AddThis Button END -->
	<section id="answer">
		<h1>No</h1>
		<h2>Not Yet</h2>
		<p><b><!--Shark Week is usually in August each year.-->
		<?php
				$SWstart = '2016-06-26';
				$daystil = ceil((strtotime($SWstart) - strtotime('now'))/(24 * 60 * 60));
				echo $daystil . ' days until Shark Week begins June 26, 2016';
			?>
		</b></p>
		<p><a href="#content">Can't wait &amp; need sharks now? &darr;</a></p>
	</section>
</header>
<div id="content" class="columns" role="main">
	<h2>Can't wait for Shark Week?</h2>
	<p>Here's a compilation of shark-related goodies to keep you from plunging into shark-deprivation madness:</p>
		<ul class="dots">
<!-- <li>Read up on <a href="#news">news about this year's Shark Week on Discovery Channel</a></li>
        <li>Check out the <a href="#tv">programming and schedule for Shark Week 2013</a></li> -->
		  <li><a href="#stream">Watch live sharks</a> in the Georgia Aquarium's Ocean Voyager tank via #sharkcam</li>
		  <li><a href="http://animals.nationalgeographic.com/animals/sharks/">Decorate your desktop with sharks</a>--all the photos in National Geographic's shark profiles and galleries are also available as desktop wallpapers.</li>
		  <li><a href="#watch">Watch shark videos online</a></li>
		  <li>Learn more about <a href="#learn">sharks</a></li>
		  <li>Give to a <a href="#donate">shark-related charity</a></li>
		  <li>Play a <a href="#game">shark game or check out shark apps</a></li>
		  <li><a href="#buy">Buy shark books &amp; DVDs</a></li>
		  <li>Volunteer to <a href="#intl">help make IsItSharkWeek.com international</a></li>
		  <li><a href="mailto:hammerhead@isitsharkweek.com?subject=Add_a_link_to_isitsharkweek.com">Suggest links</a> to add to the web site</li>
		</ul>
<!-- ?php include("news.php"); ? -->
<!-- ?php include("tv.php"); ? -->
<!-- ?php include("stream.php"); ? -->
<?php include("watch.php"); ?>
<?php include("learn.php"); ?>
<?php include("donate.php"); ?>
<?php include("game.php"); ?>
<?php include("buy.php"); ?>
<?php include("intl.php"); ?>

</div><!-- #content -->
