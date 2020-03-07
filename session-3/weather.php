<!DOCTYPE html>
<html>
<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<?php

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$query = array(
			"q"  => $_GET['city'],

			"appid" => '8a428ae3346b5829f82bd958ba01e01c'

		);

		curl_setopt($curl, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather"."?".http_build_query($query));
		$weather_search = json_decode(curl_exec($curl));

		$count = 0;
		echo '<div class="container">
				<div class="row">';
					foreach ($weather_search->weather as $weather){
						if ($count == 2){
							echo "</div><div class='row'>";
							$count = 0;
						}
						echo "<div class='col-12 col-md-6'>
						<img src=' http://openweathermap.org/img/w/".$weather->icon.".png'alt=''>
						<h2>".$weather->main."</h2>
						<br><h4>".$weather->description."
						</h4><br></div>";
						$count = $count + 1;
					}
					echo "</div>";
	?>
</body>
</html>
