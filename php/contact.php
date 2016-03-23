<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css" rel="stylesheet" media="screen">

     <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
     <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


     <script>
		$(document).ready(function(){
		    $('[data-toggle="popover"]').popover();   
		});
		</script>
		<script>
	function myFunction() {
    alert("Message submitted successfully");
	}
	</script>
	<style>
	 .map-container { height: 300px }
	.btn.btn-success {
    color: #ffffff;
    background-color: #e60e7d;
    background-image: linear-gradient(to bottom, #f50eda, #e60ea9);
    border-color: #f013bc #f013bc #f013bc;
}
.btn.btn-success:hover {
    color: #ffffff;
    background-color: #e60ea9;
    background-image: linear-gradient(to bottom, #e60ea9, #e60ea9);
    border-color: #f013bc #f013bc #f013bc;
}
html { height: 100% }
body { height: 100% }
#map-container { height: 30% }</style>
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

					<li ><a href="../index.html">Login</a></li>
					<li ><a href="register.php">Register</a></li>
					<!-- <li ><a href="home.php">Home</a></li>
					<li class="dropdown">
						<a href="home.php" class="dropdow-toggle" data-toggle="dropdown">Books <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="display_fiction.php">Fiction</a></li>
							<li><a href="display_records.php">Non-Fiction</a></li>
						</ul>

					</li> -->
					<li class="active" ><a href="contact.php" >Contact Us</a></li>
					 	
					 </li>
				</ul>
			</div>
		</div>
	</div>

<header>
	<div class="jumbotron">
		<div class="container">
			<h1>Contact US</h1>
		</div>
	</div>
</header>
<div class="container">
	<div class="row">
		<div class="col-md-4 ">
			<div class="well">
			<h3><p class="text-danger">REACH US</p></h3><br>
			<p>Please use the contact form on the right side if you have any questions or requests, concerning our services.<br>
			<br>

				We will respond to your message within 24 hours.
				<br>
				<br>
				</p>
			
			</div>

		</div>
	
	

	
		<div class="col-md-4 ">
			<div class="well">
			 <h3><p class="text-success">GENERAL</p></h3>
			 <p> Shopomatic <br>

			<span class="glyphicon glyphicon-home"></span> No 64A Salford Street<br>
			Newlands<br>
			Wellington<br><br>

			<span class="glyphicon glyphicon-earphone"></span> +64224528028<br>
			<span class="glyphicon glyphicon-envelope"></span> divyakaran2009@gmail.com </p>	
			</div>
		</div>	
		<body>



		<div class="model-body">

		<form class="col-md-4" action="message.php" method="post">

			<div class="well">
			<h3><p class="text-primary">MAIL US</p></h3>
			 
			<div class="form-group">
				<input type="text" name = "username" class="form-control input-xs" placeholder="Username" maxlength="12"> 

			</div>
			
			<div class="form-group">
				<input type="Email" name="email" class="form-control input-xs" placeholder="Email">

			</div>
			<div class="form-group">
 
 			<!-- <a data-toggle="popover" data-placement="left" 	data-content="Message space is limited to 200 characters">
			<input 			class="form-control" type="text" name="message" placeholder="Type in your message" rows="5"></a>
 -->

			 <a data-toggle="popover" data-placement="left" 	data-content="Message space is limited to 200 characters">
        	<textarea class="form-control" id="text" name="message" placeholder="Type in your message" rows="5" maxlength="200"></textarea>
        	</a></div>



			<div class="form-group">
						<button onclick="myFunction()">Send</button>

<!-- 				<input type="submit" class="btn btn-block btn-lg btn-primary" value="Send">
 --><!-- 				<span class="pull-right"><a href="register.php">Register</a></span><span><a href=""> Forgot Password</a></span>
 -->			</div>
		
			</div>
			</form>
			</div></div>
				
		
</div>

		<div class="col-md-12">
			<div class="well">
			 <h3><p class="text-warning">ROAD MAP<span class="glyphicon glyphicon-map-marker"></p></span></h3>
			 
   <iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJiVWgrTSsOG0RHHstYk0hoNA&key= AIzaSyBAt9aek_cY2FTtHjHO2YxLoOEGnyIt9Zk " allowfullscreen></iframe>



   

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	</body>



<footer>
	<div class="container">
		<hr>
		<p><small><a href="www.http://facebook.com"> <a href="#" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-heart"></span> </a></a>On Facebook</small></p>

		<p><small><a href="www.http://Twitter.com"> Ask whatever</a>On Twitter</small></p>
		</div>


</footer>

</html>
