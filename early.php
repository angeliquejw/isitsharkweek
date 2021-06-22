<header class="siteHeader">
  <h1>No!</h1>
  <div class="countdownWrapper">
    <div class="countdown">
      <div class="countdownNum">
        <strong>
          <?php
      	    // $SWstart is defined in index.php
            $daystil = ceil((strtotime($SWstart) - strtotime('now'))/(24 * 60 * 60));
            echo $daystil;
          ?>
        </strong>
      </div>
      <?php
        if($daystil > 1) {
          echo '<span>days until</span>';
        } else {
          echo '<span>day until</span>';
        }
      ?>
    </div>
    <h2 class="siteLogo">Shark Week</h2>
  </div>
  <nav id="content" class="siteNav optionsList fadeIn">
    <ul>
      <li><a href="#share">Share The Countdown</a></li>
      <li><a href="#learn">Learn About Sharks</a></li>
    </ul>
  </nav>
</header>
<main>
  <?php include("share.php"); ?>
  <?php include("learn.php"); ?>
</main>
