<?php
	require 'connection.php';
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

<section id="film">
	<div class="container">
		<div class="row">
			<?php
				if (mysqli_num_rows($result) > 0){
					while($row = mysqli_fetch_assoc($result)){
						echo "<div class='col-12 col-md-4'>";
						echo "<a href='film.php?film=".$row['imdbID']."'><img src='".$row['poster']."' width='100%'></a>";
						echo "<h3>".$row["filmName"]."</h3></div>";
					}
				}
			?>
		</div>
	</div>
</section>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
