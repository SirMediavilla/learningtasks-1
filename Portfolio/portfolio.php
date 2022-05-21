<!DOCTYPE html>
<html lang="en">

	<head>
	    <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="pstyle.css"/>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale+1.0">
		
		<link href='simplelightbox-master/dist/simple-lightbox.min.css' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
	</head>
	
	<style>
			body
			{
				background-image: url(images/w.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				text-align: center;
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
				font-size: 25px;
			}
			
			table 
			{
			  border-spacing: 30px;
			}
			
			class_name{border-style: none;}
	</style>
	
	<body>
	<?php include 'Navbar.php' ?>
		<div class="controler">
			
			<center>
				<div id="Contact">
					<h1 style="font-size:50px;">Portfolio</h1>
					<h3>Here's a compilation of my works!</h3>
					
					<hr style="height:2px; width:100%; border-width:0; color:red; background-color:black">
					
					<p>&nbsp;
								<p>&nbsp;
								<p>&nbsp;
					
					<table align=center style="margin:20;padding:0";>
						<tr>
							<th>
								<img src="images/cookbook.png" title="cookbook" alt="cookbook" style="width:150px;height:150px;"/>
							</th>

							<th>
								<div><h2 class="d"><a href="LT2/pe1_Mediavilla.html" target="_blank">Recipe Website</a><h3></div>
							</th>
							
							<th>
								<img src="images/movie.png" title="movies" alt="movies" style="width:150px;height:150px;"/>
							</th>

							<th>
								<div><h2 class="d"><a href="LT3/index.html" target="_blank">Top 10 Movies Website</a><h3></div>
							</th>
						</tr>
						
						<tr>
							<th>
								<img src="images/sea.png" title="sea cave" alt="sea cave" style="width:150px;height:150px;"/>
							</th>

							<th>
								<div><h2 class="d"><a href="LT4/index.html" target="_blank">Typography Website</a><h3></div>
							</th>
							
							<th>
								<img src="images/waldo.png" title="waldo" alt="waldo" style="width:150px;height:150px;"/>
							</th>

							<th>
								<div><h2 class="d"><a href="LT5/index.html" target="_blank">Wheres Waldo Website</a><h3></div>
							</th>
						</tr>
					</table>

					<table>
						<tr>
							<th>
								<img src="images/charity.png" title="charity" alt="charity" style="width:150px;height:150px;"/>
							</th>

							<th>
								<div><h2 class="d"><a href="MIDTERM/index.html" target="_blank">Charity Website</a><h3></div>
							</th>
						</tr>
					</table>
					
					<footer>
						<div class=footer>
							<center>
								<p>&nbsp;
								<p>&nbsp;
								<p>&nbsp;
								<hr style="height:2px; width:100%; border-width:0; color:red; background-color:black">
							
								<p class="credit">&copy; Copyright Sir Mediavilla 2022<br></p>
								<p>All Rights Reserved</p>
								<p>&nbsp;
							</center>
						</div>
					</footer>
					
				</div>
			</center>
		</div>
	</body>
</html>
