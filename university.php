<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no;date=no;address=no;email=no">

	<TITLE>Maxim Stanko - Portfolio</TITLE>

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
			initializeGoogleMap();
		});
	</script>
	
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyCtBpEOMXx4IE_d2LCPsNOvcJQcPpZzZsE
"></script>

	<script type="text/javascript">
				function initializeGoogleMap() {
					var latlngRobin = new google.maps.LatLng(52.3940619703309, 13.13332278465728);
		
					var OptionsRobin = {
						zoom: 17,
						streetViewControl: false,
						center: latlngRobin,
						mapTypeId: google.maps.MapTypeId.ROADMAP
						};
	
					var markerRobin = new google.maps.Marker({
					      position: latlngRobin,
					      title:"HPI"
					  });
		
					//Karte erzeugen
					var map1 = new google.maps.Map(document.getElementById("map_Robin"), OptionsRobin);
					//Marker erzeugen
					markerRobin.setMap(map1);
				}
	</script>
   

</head>
<body onload="initializeGoogleMap();">
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
						--><li><a href="projects.php">Projects</a></li><!--
						--><li class="current_page_item"><a href="university.php">University</a></li>
					</ul>
				</div>
			</nav>
		</header>

		<div class="page">
			<main style="padding-right: 200px;">
				
					<h1>Hasso-Plattner-Institute</h1>
	                <p>Prof.-Dr.-Helmert-Straße 2-3<br>
                    14482 Potsdam<br>
					Germany<br>
                    Website: <a href="https://hpi.de/">https://hpi.de/</a>
                       </p> <br>
					
					</table>
				</article>
				<article>

<div id="map_Robin" style="width: 100%; height: 350px;background-color: #cccccc;"></div>
<br><br><br><br><br><br><br><br><br><br>
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
