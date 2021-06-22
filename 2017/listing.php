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
		if($listing_datetime > strtotime('now')){
	    echo '<tr data-day="' .$listing_day. '">';
	    echo '<td data-type="day"><strong>'.$listing_day.'</strong> '.$listing_date.'</td><td data-type="time">'.$listing_time.' EST</td><td data-type="title">'.$listing_title.'</td>';

			$sig1 = ($listing_prem == true) ? 'prem' : '';
			$sig2 = ($listing_new == true) ? 'nty' : '';

	    echo '<td data-sig="' .$sig1. ' ' .$sig2. '"></td>';
	    echo '</tr>';
		}
  }
	?>
	</tbody>
</table>
