<table>
  <thead>
		<tr>
			<th>Day</th><th>Time</th><th>Title</th><th></th>
		</tr>
	</thead>
	<tbody>
	<?php
  $jsondata = file_get_contents('schedule.json');
  $data = json_decode($jsondata, true);
  $listings = $data['listings']['listing'];
  $now = strtotime('now');
  $now_time = date('g:i a', $now);
  $approx_time = date('g:i a', strtotime('-59 minutes', strtotime($now_time)));
  $first = true;

  usort($listings, function($a, $b) {
    return ($a['scheduled'] < $b['scheduled']) ? -1 : 1;
  });

  foreach ($listings as $listing) {
    $listing_title = $listing['title'];
    $listing_prem = $listing['premiere'];
    $listing_new = $listing['new'];
    $listing_datetime = strtotime($listing['scheduled']);
    $listing_day = date('D', $listing_datetime);
    $listing_date = date('M j', $listing_datetime);
    $listing_time = date('g:i a', $listing_datetime);
    $sig1 = ($listing_prem == true) ? 'prem' : '';
    $sig2 = ($listing_new == true) ? 'nty' : '';
    $tr = '<tr data-day="' .$listing_day. '"><td data-type="day"><strong>'.$listing_day.'</strong> '.$listing_date.'</td><td data-type="time">'.$listing_time.' EST</td><td data-type="title">'.$listing_title.'</td><td data-sig="' .$sig1. ' ' .$sig2. '"></td></tr>';

    if ($listing_time >= $approx_time) {
        if ($first) {
          echo $tr;
          $first = false;
        }
    }
    if ($listing_datetime > $now){
      echo $tr;
    }
  }
	?>
	</tbody>
</table>
