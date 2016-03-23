<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<meta name="keywords" content=" JavaScript Form Validation" />  
    <meta name="description" content="This document is a JavaScript Form Validation " /> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"s>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="sample-registration-form-validation.js"></script>  
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

     <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>
    	<script>
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover();   
		});
		</script>

</head>

<body onload="document.registration.userid.focus();">

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

					<li ><a href="../index.html">Login</a></li>
					<li class="active"><a href="register.php">Register</a></li>
					<li ><a href="contact.php">Contact Us</a></li>
					 
				</ul>
			</div>
		</div>
	</div>


	<div class="modal-dialog">
	<div class="modal-content" style="background: lightgreen;">

	<div class="modal-header">
			<h1 class="text-center" style="font-family:URW Chancery L"><font size="10" >Shopomatic</font></h1>
  <div class="container marketing">

    
  </div>
</div>
		
		
	<div class="model-body">
	     <form class="col-md-12 center-block" method="POST" action="create.php" name="registration" onsubmit="return formValidation();" >
			 

 
 <div class="form-group">
			<br>
			<br>
			<br>
			<a data-toggle="popover" data-placement="left" 	data-content="User name cannot be empty. Use atleast 5-12 characters. You can use alphabet, number and symbol">
			<input type="text" name = "user" class="form-control input-lg" placeholder="Username" maxlength="12" autofocus></a>
			
				
				</div>
			<div class="form-group">
				<a data-toggle="popover" data-placement="left" 	data-content="Password canot be empty. Use atleast 8-12 characters. You can use alphabet, number and symbol">
				<input type="Password" name ="password" class="form-control input-lg" placeholder="Password" maxlength="12"></a>

				</div>
	
			<div class="form-group">
				<a data-toggle="popover" data-placement="left" 	data-content="Enter a valid email ID">
				<input type="Email" name="email" class="form-control input-lg" placeholder="Email" maxlength="30">
</a></div>

				<input type="submit" class="btn btn-block btn-lg btn-primary" value="Register">
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
