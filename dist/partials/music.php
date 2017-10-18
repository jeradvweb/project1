<!-- <div class="text-white text-center musicplayer mt-5">

	<p>~Now playing Hyrule Field~</p>
	<audio controls autoplay>
  		<source src="music/field.mp3" type="audio/mp3">
  	
  		Your browser does not support the audio element.
	</audio>

</div> -->

<?php 
	if($forecast["currently"]['icon'] == 'clear-day'){
  		include 'cleardaymusic.php';
}
	elseif($forecast["currently"]['icon'] == 'clear-night'){
  		include 'clearnightmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'rain'){
  		include 'rainmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'snow'){
  		include 'snowmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'wind'){
  		include 'windmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'sleet'){
  		include 'sleetmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'fog'){
  		include 'fogmusic.php';
}
	elseif($forecast["currently"]['icon'] == 'cloudy'){
  		include 'cloudymusic.php';
}
	elseif($forecast["currently"]['icon'] == 'partly-cloudy-day'){
  		include 'partlycloudydaymusic.php';
}
	elseif($forecast["currently"]['icon'] == 'partly-cloudy-night'){
  		include 'partlycloudynightmusic.php';
}



?>

<!-- <div class="text-white text-center musicplayer mt-5">

	<p>~Now playing Hyrule Field: Night~</p>
	<audio controls autoplay>
  		<source src="music/night.mp3" type="audio/mp3">
  	
  		Your browser does not support the audio element.
	</audio>

</div> -->

