<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>php file create</title>
	<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="css/main.css" rel="stylesheet" type="text/css">
	<!-- Latest compiled Bootstrap JavaScript -->
<script src="js/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- latest jQuery library -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
</head>


<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
	      <li class="nav-item"> <a class="nav-link" href="creat.php">create</a> </li>
	      <li class="nav-item"> <a class="nav-link" href="read.php">read</a> </li>
	    </ul>
	  </div>
	</nav>

  <div class="container">
      <h1>Create a new data</h1>
    <div class="row">
      <form action="insert.php" method="post">

        <table border="0">
          <tr>
            <td>albumid</td>
            <td><input type="text" name="albumid" ></td>
          </tr>

          <tr>
            <td>albumname</td>
            <td><input type="text" name="albumname" ></td>
          </tr>

          <tr>
            <td>time</td>
            <td><input type="text" name="time" ></td>
          </tr>

          <tr>
            <td>introduce</td>
            <td><input type="text" name="introduce" ></td>
          </tr>

          <tr>
            <td>photo</td>
            <td><input type="text" name="photo" ></td>
          </tr>

          <tr>
            <td><input type="submit" name="update" ></td>
          </tr>
        </table>

      </form>
    </div>
  </dic>

</body>
</html>
