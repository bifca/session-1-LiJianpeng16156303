<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Weather Search</title>
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<form class="form-inline" role="form" action="weather.php" method="get">
	  <select class="form-control" name="city">
	          <option value="Wuhan">Wuhan</option>
	          <option value="Shanghai">Shanghai</option>
	          <option value="Beijing">Beijing</option>
	          <option value="Tokyo">Tokyo</option>
	          <option value="London">London</option>
						<option value="Birmingham">Birmingham</option>
	          <option value="New York">New York</option>
	          <option value="Los Angeles">Los Angeles</option>
	          <option value="Sydney">Sydney</option>
	  </select>

		<button type="submit" class="btn btn-light">Search</button>
	</form>
</div>
</body>
</html>
