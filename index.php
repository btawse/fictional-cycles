<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lang = "en" lang = "en">
	<head>
		<link rel = "stylesheet" type = "text/css" href = "style.css" />
		<script type = "text/javascript" src = "js/jquery.js"></script>
		<script type = "text/javascript" src = "js/slideshow.js"></script>
		<script type = "text/javascript">

			$(document).ready(function(){
				$('#slideshow').slideshow();
			});
			
			function toggleSitemap() {
				$('#contact').slideToggle(500);
			}
			
		</script>
		<title>Fictional Cycles | Home</title>
	</head>
	<body>
		<div id = "page">
			<div id = "top">
				<a class = "toplink" href = "#" onclick = "toggleSitemap()">Sitemap</a>
			</div>
			<div id = "head">
				<a href = "index.php"><h1 class = "logo">Fictional Cycles</h1></a>
				<ul id = "nav">
					<a href = "index.php"><li>Home</li></a>
					<li>Bikes</li>
					<li>Repairs</li>
					<li>Accessories</li>
					<li>Hire</li>
					<li>Sell/Exchange</li>
					<a href = "cyclescheme.html"><li>Cyclescheme</li></a>
					<a href = "contact.html"><li>Contact</li></a>
				</ul>
			</div>
			<div id = "contact">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet turpis dolor. 
					Nunc orci nunc, porta vitae imperdiet nec, scelerisque pharetra quam. Vestibulum et purus 
					gravida justo ultrices consectetur. Nullam sed risus vitae tellus accumsan pretium. 
					Maecenas id feugiat quam. Proin eleifend cursus mauris, a venenatis ligula porttitor nec. 
					Etiam ullamcorper interdum enim, a lobortis massa feugiat a. Donec porta vulputate congue. 
					In pretium volutpat lectus ac venenatis. Morbi id consequat tellus. Cras a dapibus diam. 
					Nunc ornare rhoncus nunc, eget euismod mi vulputate eget. Mauris vitae eros sed mauris 
					mollis adipiscing quis eu ligula. In turpis enim, euismod id mattis eget, consequat ac 
					odio. Duis congue imperdiet augue, ut sagittis nunc mollis dignissim. Sed dictum, nulla 
					luctus lacinia mollis, metus sem ultrices quam, vel pellentesque nisl justo sed turpis. 
					Sed in erat vel diam feugiat aliquet vel nec sem. Nulla quis commodo ipsum.</p>
			</div>
			<div id = "content">
				<div id = "main">
					<div id = "banner">
						<div id = "slidecontrol">
								<ol id = "slidebuttons">
									<li><a href = "#">1</a></li>
									<li><a href = "#">2</a></li>
									<li><a href = "#">3</a></li>
								</ol>
							</div>
						<div id="slider">
							<ul id = "slideshow">
								<li id = "slide1"><a href = "cyclescheme.html">
									<img src = "images/slide3.jpg" />
									<div class = "slidecaption">
										<span class = "captiontitle">Cycle To Work</span>
										<span class = "subcaption">Buy a bike from us for commuting and save up to 50%!</span>
									</div>
								</a></li>	
								<li id = "slide3"><a href = "bike.php?bid=1">
									<img src = "images/slide1.jpg" />
									<div class = "slidecaption">
										<span class = "captiontitle">Haro F1C BMX 2010</span>
										<span class = "subcaption">Haro F series freestyle frameset with front and rear stunt pegs - only &pound;199.</span>
									</div>
								</a></li>
								<li id = "slide3"><a href = "#">
									<img src = "images/slide2.jpg" />
									<div class = "slidecaption">
										<span class = "captiontitle">Repairs</span>
										<span class = "subcaption">From punctures to full build-ups, see our full list of workshop services.</span>
									</div>
								</a></li>
							</ul>
						</div>
						<div id = "slidenav">
						</div>
					</div>
					<h2>Welcome to Fictional Cycles</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet turpis dolor. 
					Nunc orci nunc, porta vitae imperdiet nec, scelerisque pharetra quam. Vestibulum et purus 
					gravida justo ultrices consectetur. Nullam sed risus vitae tellus accumsan pretium. 
					Maecenas id feugiat quam. Proin eleifend cursus mauris, a venenatis ligula porttitor nec. 
					Etiam ullamcorper interdum enim, a lobortis massa feugiat a. Donec porta vulputate congue. 
					In pretium volutpat lectus ac venenatis. Morbi id consequat tellus. Cras a dapibus diam. 
					Nunc ornare rhoncus nunc, eget euismod mi vulputate eget. Mauris vitae eros sed mauris 
					mollis adipiscing quis eu ligula. In turpis enim, euismod id mattis eget, consequat ac 
					odio. Duis congue imperdiet augue, ut sagittis nunc mollis dignissim. Sed dictum, nulla 
					luctus lacinia mollis, metus sem ultrices quam, vel pellentesque nisl justo sed turpis. 
					Sed in erat vel diam feugiat aliquet vel nec sem. Nulla quis commodo ipsum.</p>
				</div>
				<div id = "rightcolumn">
					<span class = "header">Current Bikes</span>
					<?php
					
						if(!mysql_connect('127.0.0.1'))
							die('Could not connect to database: ' . mysql_error());
							
						mysql_select_db('test');
						
						$result = mysql_query('SELECT * FROM bikes LIMIT 0,10;');
						
						$num_rows = mysql_num_rows($result);
						
						for($i = 0; $i < $num_rows; $i++) {
							$row = mysql_fetch_array($result);
							echo 	'<a href = "bike.php?bid=' . $row['bid'] . '"><div class = "bikeprev">
										<img src = "100x75/' . $row['bid'] . '.jpg" />
										<span class = "brand">' . $row['brand'] . '</span><br />
										<span class = "model">' . $row['model'] . '</span><br />
										<span class = "rrp">';
							if($row['rrp'])
								echo	'RRP &pound;' . $row['rrp'];
							echo		'</span>
										<strong class = "price">&pound;' . $row['price'] . '</strong>
									</div></a>';
						}
					
					?>
				</div>
			</div>
			<div id = "foot">
				<p>
					&copy;2011 Fictional Cycles Ltd.<br />
					123 Fictional Road<br />
					Fictionville<br />
					Fictionshire<br />
					AA1 1AA<br />
					Tel: 123 4567 8901
				</p>
			</div>
		</div>
	</body>
</html>