<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Disposable SMS Numbers | Receive SMS Online</title>
	<meta name="description" content="Receive SMS annonymously and online. Pick from a list of numbers.">
	<meta name="author" content="Trajche Kralev | tj.mk">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<!--[if lt IE 9]>
	    <script type="text/javascript" src="scripts/html5shiv.js"></script>
	<![endif]-->
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/flags.css"/>
</head>

<?php require('includes/config.php'); ?>

<body>
<div id="wrap">
	<div class="container-fluid">
		<div class="row"> 
			
			<!-- LEFTCOLUMN START -->
			<div id="intro" class="col-lg-4"> <a href="index.html" class="logo"> <img src="images/logo.png" alt="Disposable SMS Phone Numbers" height="63" width="178"/> </a> 
				<nav class="navbar">
					<a class="menu-btn collapsed" data-toggle="collapse" href="#menu-list" aria-expanded="false" aria-controls="menu-list">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<div id="menu-list" class="collapse">
						<ul class="nav">
							<li><a href="mailto:trajche@kralev.eu">Contact</a></li>
							<li><a href="https://github.com/trajche">Source</a> </li>
						</ul>
					</div>
				</nav>
				
				<div id="lefty">
					<ul>
						<li class="backgg">
							<div class="slogan">
								<h2>What's this? </h2>
								<small>SMS Recycle is a web service which provides you with phone numbers that you can use to receive texts. Why you ask?
									<br>
									<br>- Phone number privacy
									<br>- Avoid phone spam (surveys)
									<br>- Sign up online annonymously
								</small>
							</div>
							<img src="images/background.jpg" alt="">
						</li>
						
					</ul>
				</div>
			</div>
			<!-- LEFTCOLUMN END --> 
			


			<!-- CONTENT BEGIN -->
			<div id="content" class="col-lg-8 col-lg-offset-4">

				<div class="row">
					<div class="col-md-6">
						<h3>Pick a phone number</h3>
						<p class="subtitle">Select a phone number that you would like to use...</p>
						<ul class="phones f32">
							<?php foreach ($numbers as $number => $source) { ?>
								<a onclick="showMessages(<?php echo cleanit($number); ?>)" href="#">
				        			<li> 
				        				<div class="flag <?php echo strtolower($source['countrycode']); ?>" alt="<?php echo $countries[$source['countrycode']]; ?> Disposable Phone Number <?php echo $source['source'];?>"></div>
				        				<em class="phone"><?php echo $number; ?></em>
				        			</li>
			        			</a>
							<?php } ?>
		        		</ul>
					</div>
					<div class="col-md-6">
						<ul id="messageContent">
						</ul>
					</div>
				</div>
		
				<footer>
					<p> &copy; 2015 SMS Recycle </p>
					<ul class="soc-nav">
						<!-- Todo: Social buttons -->
					</ul>
				</footer>
			</div>
			<!-- CONTENT END --> 
			
		</div>
	</div>
</div>


<!-- JavaScript --> 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


<!--[if lte IE 9]>
	<script src="scripts/respond.min.js"></script>	
<![endif]-->
</body>
</html>
