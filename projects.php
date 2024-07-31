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
				<img src="images/logo_head.jpg" id="logo" alt="">
				<img src="images/logo_head_mobile.jpg" id="logomobile" alt="">
				

				<div class="clearer"></div>
			</div>
			<nav role="navigation">
				<div class="menu">
					<button class="nav-button">Toggle Navigation</button>
					<ul class="primary-nav">
						<li><a href="index.php">About Me</a></li><!--
						--><li class="current_page_item"><a href="projects.php">Projects</a></li><!--
						--><li><a href="university.php">University</a></li>
					</ul>
				</div>
			</nav>
		</header>
       
 
		<div class="page">
			<main>
				
					<h1>Japanese Learning Website (<a href="https://community.wanikani.com/t/web-app-wanikani-history-timemachine/56652">Link</a>)</h1>
					<img src="images/wanikaniwebsite.gif">		
                    

					<div class="clearer"></div>
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
