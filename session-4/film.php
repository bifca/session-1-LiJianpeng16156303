<?php
	$imdbID = $_GET['film'];
	require 'connection.php';

	//OMDB Query
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$query = array(
		"apikey" => 'df1323af',
		"i" => $imdbID,
		"plot" => 'full'
	);
	curl_setopt($curl, CURLOPT_URL, "http://www.omdbapi.com/"."?".http_build_query($query));
	$film = json_decode(curl_exec($curl));
	$sql2 = "SELECT * FROM films WHERE imdbID = '".$imdbID."'";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OMDB</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a href="index.php"><img src="images/logo.png" width="100%" alt=""/></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="#film">Film</a> </li>
	      </ul>
	    </div>
	</nav>

	<div class='container'>
		<div class='row'>
			<div class='col-12 col-md-12 col-lg-12'>
				<?php echo '<h1>'.$film->Title.'</h1>';?>
			</div>
		</div>
		<div class='row'>
			<div class='col-12 col-md-4 '>
				<?php echo '<p><img src="'.$film->Poster.'"></p>';?>
			</div>
			<div class='col-12 col-md-8 '>
				<?php
					echo '<p><strong>Director: </strong>'.$film->Director.'</p>';
					echo '<p><strong>Writer: </strong>'.$film->Writer.'</p>';
					echo '<p><strong>Actors: </strong>'.$film->Actors.'</p>';
					echo '<p><strong>Genre: </strong>'.$film->Genre.'</p>';
					echo '<table width="100%">
									<tr>
									  <td><strong>Country: </strong>'.$film->Country.'</td>
									  <td><strong>Language: </strong>'.$film->Language.'</td>
									</tr>
									<tr>
									  <td><strong>imdbRating: </strong>'.$film->imdbRating.'</td>
									  <td><strong>imdbID: </strong>'.$film->imdbID.'</td>
									</tr>
									<tr>
									  <td><strong>Released: </strong>'.$film->Released.'</td>
									  <td><strong>Runtime: </strong>'.$film->Runtime.'</td>
									</tr>
								</table><br>';
					echo '<p><strong>Plot: </strong>'.$film->Plot.'</p>';
				?>
			</div>
		</div>
		<div class='row'>
			<div class='col-12 col-md-12 col-lg-12'>
				<?php
					$result = mysqli_query($conn, $sql2);
					if (mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							echo "<video width='100%' controls>
										  <source src='".$row['trailer']."' type='video/mp4'>
										</video>";
						}
					}
				?>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
