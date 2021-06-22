<section id="share">
  <h3 class="heading">Be kind, spread the word</h3>
  <p>Your friends also don't know when Shark Week is.</p>
  <ul class="socialWrapper">
    <li>
      <!-- $status is defined in index.php -->
      <!-- $daystil is defined in early.php -->
      <?php
        if($status == 'early'){
          if($daystil > 1) {
            $twittershare = 'http://twitter.com/intent/tweet?text='.$daystil.'+Days+Until+%23SharkWeek+2018&url=http:%2F%2Fisitsharkweek.com'; 
          } else {
            $twittershare = 'http://twitter.com/intent/tweet?text='.$daystil.'+Day+Until+%23SharkWeek+2018&url=http:%2F%2Fisitsharkweek.com'; 
          }
        } else {
          $twittershare = 'http://twitter.com/intent/tweet?text=When+Is+%23SharkWeek&url=http:%2F%2Fisitsharkweek.com'; 
        } ?>

      <a href="<?php echo $twittershare; ?>" target="_blank" title="Share this on Twitter">
        <span class="icon-twitter"></span>
      </a>
    </li>
    <li>
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//isitsharkweek.com/" target="_blank" title="Share this on Facebook">
        <span class="icon-fb"></span>
      </a>
    </li>
  </ul>
</section>
