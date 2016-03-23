<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="UTF-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" >
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
					<li class="active"><a href="home.php">Home</a></li>
					<li class="dropdown" >
						<a href="home.php" class="dropdow-toggle" data-toggle="dropdown">Books <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="display_fiction.php">Fiction</a></li>
							<li><a href="display_records.php">Non-Fiction</a></li>
						</ul>

					</li>
					<li ><a href="contact.php">Contact Us</a></li>
					 	
					 </li>
             <button  data-toggle="modal" data-target=".bs-example-modal-sm">

					       <div class="modal-footer"><a href="index.html">Logout</a></div></button>

				</ul>
			</div>
		</div>
	</div>

					
<div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h4><span class="glyphicon glyphicon-lock"></span>Logout <i class="fa fa-lock"></i></h4></div>
      <div class="modal-body"><span class="glyphicon glyphicon-question-sign"></span> Are you sure you want to log-off?</div>
      
      <div class="modal-footer"><a href="../index.html" class="btn btn-primary btn-block">Logout</a></div>
    </div>
  </div>
</div>

	
	<div align="center">
<div class="alert alert-success">
    <strong>Successfully logged in!!!!</strong> Enjoy Shopping
  </div>
<h3>A Smart Webstore to do Online Shopping</h3>
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 40%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../image/book.jpg" alt="Library" width="100" height="100">
      </div>

      <div class="item">
        <img src="../image/book2.jpg" alt="Library" width="100" height="100">
      </div>
    
      <div class="item">
        <img src="../image/books.jpg" alt="Library" width="100" height="100">
      </div>

      <div class="item">
        <img src="../image/book1.jpg" alt="Library" width="100" height="100">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

</div>


</font>
</div>
</body>
</html>