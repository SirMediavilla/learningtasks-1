
<html>

	<head>
	    <title>PHP Demo</title>
	    <link rel="stylesheet" type="text/css" href="pstyle.css"/>
		
	    <meta name="viewport" content="width=device-width">
		
		<style>
		body
		{
		    background-image: url(images/w.jpg);
		    background-repeat: no-repeat;
			background-size: cover;
	        }

		.about 
		{
		  width: 500px;
		  padding: 10px;
		  margin: 0;
		}
		
		.d
		{
		    font-family: 'Nanum Gothic Coding',monospace;
		}
		
		table 
		{
		  border-spacing: 30px;
		}
		
		class_name{border-style: none;}
	   </style>
		
	</head>

	<body>
	
		<button class="tablink" onclick="openPage('Home', this, '#555')">Home</button>
		<button class="tablink" onclick="openPage('About Me', this, '#555')">About Me</button>
		<button class="tablink" onclick="openPage('Portfolio', this, '#555')">Portfolio</button>
		<button class="tablink" onclick="openPage('Contact', this, '#555')">Contact</button>

		<script src="p.js"></script>

		<div id="Home" class="tabcontent">
		  <section class="text">
		  
				<center>
					<div class="image-center">
						<h1><em>"Great content is often overlooked when designed poorly"</em></h1>
						<img src="images/p.png" title="M" alt="M"/>
					</div>
				</center>

					<footer>
						<div class=footer>
							<center>
								<p>&nbsp;
								<p>&nbsp;
								<p>&nbsp;
								<hr size="2" width="100%" color="black">
							
								<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
								<p>All Rights Reserved</p>
								<p>Best viewed in fullscreen</p>
								<p>&nbsp;
							</center>
						</div>
					</footer>
					
			</section>
		</div>
		
		
		
		<section class="me">
			<div id="About Me" class="tabcontent">
			<center>
				<h1>About Me</h1>
				<h3>Some things to know</h3>

				<hr size="2" width="100%" color="black">	
				
				<p>&nbsp;
				<table align=center style="margin:15;padding:15";>
				<tr>
				
					<th>
					<div class="image-left">
						<img src="images/omelette.jpg" title="Egg" alt="Egg"/>
					</div>
					</th>
					
					<th>
						<hr size="50" width=100% color="white">
					</th>
				</tr>
				</table>
				
				<div class="about">
					<p class="d">
					My name is Sir Emmanuel Lee E. Mediavilla. I am a Filipino freelance 
					programmer that specializes in the design and implementation of websites 
					for various purposes. I graduated from The University of St. La Salle with 
					a course in Information Technology and have pursued different career opportunities 
					that granted me diversity in creating my projects. Some examples of companies I've 
					worked at are Indev Design and Web Authors+.
					</p>
				</div>
					
				<footer>
					<div class=footer>
						<center>
							<p>&nbsp;
							<p>&nbsp;
							<p>&nbsp;
							<hr size="2" width="100%" color="black">
							
							<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
							<p>All Rights Reserved</p>
							<p>Best viewed in fullscreen</p>
							<p>&nbsp;
						</center>
					</div>
				</footer>
			</center>
			</div>
		</section>



		<section class="Works">
			<center>
				<div id="Portfolio" class="tabcontent">
					<h1>Portfolio</h1>
					<h3>Here's a list of projects I've worked on!</h3>
					
					<hr size="2" width="100%" color="black">
					
					<p>&nbsp;
					<table align=center style="margin:15;padding:15";>
						<tr>
							<th>
							<div class="container">
								<img src="images/cookbook.jpg" title="Recipes" alt="Recipes"/>
								<div class="centered"><h2 class="d" style="background-color:white;"><a href="LT2/pe1_Mediavilla.html" target="_blank">Simple Recipes</a><h3></div>
							</div>
							</th>
							
							<th>
								<hr size="2" width="100" color="white">
							</th>
							
							<th>
							<div class="container">
								<img src="images/movie.jpg" title="Top 10" alt="Top 10"/>
								<div class="centered"><h2 class="d" style="background-color:white;"><a href="LT3/index.html" target="_blank">Top 10 Movies</a><h3></div>
							</div>
							</th>
						</tr>
						
						
						<tr>
							<th>
							<div class="container">
								<img src="images/sea.jpg" title="Sea Cave" alt="Sea Cave"/>
								<div class="centered"><h2 class="d" style="background-color:white;"><a href="LT4/index.html" target="_blank">The Sea Cave</a><h3></div>
							</div>
							</th>
							
							<th>
								<hr size="2" width="100" color="white">
							</th>
							
							<th>
							<div class="container">
								<img src="images/waldo.jpg" title="Waldo" alt="Waldo"/>
								<div class="centered"><h2 class="d" style="background-color:white;"><a href="LT5/index.html" target="_blank">Where's Waldo?</a><h3></div>
							</div>	
							</th>
						</tr>
					</table>
						<tr>
							<th>
							<div class="container">
								<img src="images/charity.jpg" title="charity site" alt="charity site"/>
								<div class="centered"><h2 class="d" style="background-color:white;"><a href="MIDTERM/index.html" target="_blank">Charity Website</a><h3></div>
							</div>
							</th>
						</tr>
					<table>
					
					</table>
					
					<footer>
						<div class=footer>
							<center>
								<p>&nbsp;
								<p>&nbsp;
								<p>&nbsp;
								<hr size="2" width="100%" color="black">
							
								<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
								<p>All Rights Reserved</p>
								<p>Best viewed in fullscreen</p>
								<p>&nbsp;
							</center>
						</div>
					</footer>
		
				</div>
			</center>
		</section>



		<section class="Contact">
			<center>
				<div id="Contact" class="tabcontent">
					<h1>Contact</h1>
					<h3>Interested in commissioning me? You can reach me through these!</h3>
					
					<hr size="2" width="100%" color="black">
					
					<table align=center style="margin:0;padding:0";>
						<tr>
							<th>
								<img src="images/gm.png" title="gmail-logo" alt="gmail-logo" style="width:128px;height:128px;"/>
							</th>

							<th>
								<h3>Medivaldesigner@gmail.com</h3>
							</th>
						</tr>
						
						<tr>
							<th>
								<img src="images/t.png" title="twitter-logo" alt="twitter-logo" style="width:128px;height:128px;"/>
							</th>

							<th>
								<h3>@Medival_Designer</h3>
							</th>
						</tr>
						
						<tr>
							<th>
								<img src="images/ig.png" title="instagram-logo" alt="instagram-logo" style="width:128px;height:128px;"/>
							</th>

							<th>
								<h3>@medival_designer</h3>
							</th>
						</tr>
					</table>
					
					<footer>
						<div class=footer>
							<center>
								<p>&nbsp;
								<p>&nbsp;
								<p>&nbsp;
								<hr size="2" width="100%" color="black">
							
								<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
								<p>All Rights Reserved</p>
								<p>Best viewed in fullscreen</p>
								<p>&nbsp;
							</center>
						</div>
					</footer>
					
				</div>
			</center>
		</section>			

	</body>
</html>