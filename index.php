<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no;date=no;address=no;email=no">

	<title>Maxim Stanko - Portfolio</title>

	<link href="normalize.css" rel="stylesheet" media="all">
	<link href="styles.css" rel="stylesheet" media="all">

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
  	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
	</script>

</head>
<body>

	<div class="page_margins">
	
		<header role="banner">
			<div id="headercontent">
				<img src="images/logo_head.jpg" id="logo" alt="" style="height: 80%; padding-top: 2%">
				<img src="images/logo_head_mobile.jpg" id="logomobile" alt="">


				<div class="clearer"></div>
			</div>
			<nav role="navigation">
				<div class="menu">
					<button class="nav-button">Toggle Navigation</button>
					<ul class="primary-nav">
						<li class="current_page_item"><a href="index.php">About Me</a></li><!--
						--><li><a href="projects.php">Projects</a></li><!--
						--><li><a href="university.php">University</a></li>
					</ul>
				</div>
			</nav>
		</header>
    
        <div class="page">
			<main>
				<div class="picturebar">
				</div>
				<div class="content">
					<h1>Curriculum Vitae</h1>
                    
                    <ul style="list-style: none;">
					<li></li>
					<li>2021: IT internship at the Congress Center Leipzig</li>
					<li>2022: computer science olympiad Germany ("BwInf")</li>
                    <li>2023: Abitur (German high school diploma equivalent) with highest grade 1.0</li>
                    <li>2023: immatriculation at HPI</li>
                    <br>
                    </p>
					
					<h1>Personal Github</h1>

					<a href="https://github.com/MaximStanko">Maxim Stanko - Github</a>
			  </div>

		</main>
		</div>
	</div>
	<footer>
		<div class="footer-container">
			<div class="footer-inner">

			</div>
		</div>
	</footer>
</body>
</html>
