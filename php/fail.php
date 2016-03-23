<!DOCTYPE html>
<html>
<head>
	<title>Login Failed page</title>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
</head>
<body>
	
	
	<div class="navbar navbar-inverse navbar-static-top">
		<div class="container">
			<a href="#" class="navbar-brand">Shopomatic</a>

			<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse navHeaderCollapse">

				<ul class="nav navbar-nav navbar-right">

					<li class="active"><a href="../index.html">Login</a></li>
					<li ><a href="register.php">Register</a></li>
					<li class="dropdown">
						

					</li>
					<li ><a href="contact.php">Contact Us</a></li>
					 	
					 </li>
				</ul>
			</div>
		</div>
	</div>

	<div class="alert alert-warning" >
	<p class="text-center" >
  <strong>Failed Logging in!!!</strong> Try again
</p>
 
</div>

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
			<h1 class="text-center">Shopomatic</h1>
		</div>
	<div class="model-body">
		<form class="col-md-12 center-block" action="connect.php" method="post">

			<div class="form-group">
			<br>
			<br>
			<br>
				<input type="text" name="user" class="form-control input-lg" placeholder="Username"> 
			</div> 
			<div class="form-group">
				<input type="Password" name="pass" class="form-control input-lg" placeholder="Password">

			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-block btn-lg btn-primary" value="Login">
				<span class="pull-right"><a href="register.php">Register</a></span><span><a href=""> Forgot Password</a></span>
			</div>
		</form>
		<div class="model-footer">
		<div class="col-md-12">
 		</div>
</div>
</div>
</div>
</div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</body>

</html>