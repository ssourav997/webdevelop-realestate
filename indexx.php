

<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>   
	<title>college project</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	
</head>
<body>		
		<div class="hero">
			<div class="highway"></div>
			<div class="city"></div>

			<div class="car">
				<img src="car.png">
			</div>
			<div class="wheel">
				<img src="wheel.png" class="back-wheel">
				<img src="wheel.png" class="front-wheel">
			</div>
		</div>
		<header id="header" class="header">
		<div class="top-header">
			<div class="container">
				<div class="site-info">
					<span>MON--SAT :- 8.00 A.M - 8.00 P.M ... SUNDAY :- CLOSED</span>
				</div>
				<div class="site-contact">
					<span>Tel no. (+033) 123-456-789</span>
				</div>
			</div>
		</div>


		<div class="middle-header">
			<div class="container"> 

				<div class="site-name">
					<h1><a href=""><span class="my">My</span><span class="home">Home</span></a></h1>
					<?php if (isset($_SESSION['username'])) { ?>
					<h3> welcome <?php echo $_SESSION['username']; ?> </h3>
				<?php } ?>
				</div>
				<div class="site-nav">
					<ul>
						<li class="active"><a href="">Home</a></li>
						<li><a href="#about-name">About Us</a></li>
						<li><a href="nav.php">Projects</a></li>
						<li><a href="#about-name">Contact Us</a></li>
						<?php if (isset($_SESSION['username'])) { ?> 
							<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
							

 <?php
} else
    { ?> 
                            
  	
						<li><a href="registration.php">Signup</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="#about-name">Contact Us</a></li>
					<?php } ?>
					</ul>
			</div>
		</div>
	</div>
	</header>

	<div class = "test">
	<ul>
		<li>	
	 		<a href = "nav.php"> 
         		<img src = "2.jpg" class="nav"> 
      			<figcaption>gallery view</figcaption>
      		</a>
  		</li>

  		<li>	
	 		<a href = "https://www.google.co.in/maps/@22.6231772,88.3336466,15z"> 
         		<img src = "map1.jpg" class="nav">
         		<figcaption>map view</figcaption> 
      		</a>
  		</li>
		</ul>
	</div>

	<footer id="footer" class="footer">
		<center>
				<div id="about-name" class="about-name">
					<a href=""><span class="my">About</span><span class="home">Us</span></a>
				</div></center>
				<div>
				<p class="astyle">
				We started Origin to build and protect our own wealth. That goal remains the same today and we are proud to be the largest investors with the company.</br> </br>
				We believe that a good partnership is one where everyone wins together. When you partner with Origin, you won’t find any hidden fees, confusing structures or complex deals. Our returns are created through real value creation and not financial engineering.
				</p>
	
		<div class="box">
		<center>		
			<ul>
				<li>
					<a href="#">
						<img src = "31.png" class="pic">
					</a>
				</li>

				<li>
					<a href="#">
						<img src = "32.jpg" class="pic">
					</a>
				</li>

				<li>
					<a href="#">
						<img src = "33.jpg" class="pic">
					</a>
				</li>
			</ul>
		</center>
		</div>
	</footer>
</body>
</html>