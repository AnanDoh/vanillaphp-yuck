<!doctype html>
<html lang="en">
  <head>
    <title>TsarBucks</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
  	<body style="background-color:#212121;">
	<?php include('navbar.php'); ?>

		<div class="container buffer" style="padding-top: 2%;">
		          <h1 style="color:#DF0500 ;">Login </h1>


		            <div class="container" style="padding-top: 2%;">
		              <form action="logform.php" method="POST">
		                <div class="form-group row">
		                  <label for="inputEmail3" class="col-sm-2 col-form-label" style="color:#DF0500;">SSN</label>
		                  <div class="col-sm-10">
		                    <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
		                  </div>  
		                </div>
		                <div class="form-group row">
		                  <label for="inputPassword3" class="col-sm-2 col-form-label" style="color:#DF0500;">Password</label>
		                  <div class="col-sm-10">
		                    <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
		                  </div>
		                </div>
		                <div class="form-group row">
		                  <div class="offset-sm-2 col-sm-10">
		                    <button type="submit" name="submit" class="btn btn-outline-danger">Log in</button>
		                  </div>
		                </div>
		              </form>

		            </div>

		 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>